@extends('layouts.app')
@section('content')

        <div class="row">
            <div class="pull-right">
                <a href="{{route('students.create')}}" class="btn btn-success">create</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
             <thead>
             <tr>
                 <th>id</th>
                 <th>Name</th>
                 <th>address</th>
                 <th>age</th>
                 <th>phone</th>
             </tr>
             </thead>
             @foreach($Students as $Student)
             <tr>
                 <td>{{$Student->id}}</td>
                 <td>{{$Student->Name}}</td>
                 <td>{{$Student->address}}</td>
                 <td>{{$Student->age}}</td>
                 <td>{{$Student->phone}}</td>

                 <td>
                     <form action="{{route('students.destroy',$Student->id)}}" method="post" role="form">
                         <a href="{{route('students.show',$Student->id)}}" class="btn btn-info" >عرض</a>
                         <a href="{{route('students.edit',$Student->id)}}" class="btn btn-info">تعديل</a>

                         <input type="hidden" name="_token" value="{{csrf_token()}}">
                         <input type="hidden"  name="_method" value="DELETE">

                         <button type="submit" class="btn btn-danger">حذف</button>

                     </form>
                 </td>
             </tr>
                 @endforeach
         </table>
            </div>
    {{$Students->links()}}
@endsection


