@extends('layouts.app')
@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb" style="margin-top: 20px;">
            <div class="pull-left">
                <h2>Add New Product</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>

    <form action="{{route('students.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group{{$errors->has('Name')? 'has-error':''}}">
                <strong>name :</strong>
                <input type="text" name="Name" class="form-control" placeholder="name">
                <span class="text-danger">{{$errors->first('Name')}}</span>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group {{$errors->has('address')? 'has-error':'address'}}">
                <strong>address</strong>
                <input type="text" name="address" class="form-control" placeholder="address">
                <span class="text-danger">{{$errors->first('address')}}</span>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group {{$errors->has('age')? 'has-error':'address'}}">
                <strong>age</strong>
                <input type="number" name="age" class="form-control" placeholder="address">
                <span class="text-danger">{{$errors->first('age')}}</span>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group {{$errors->has('phone')? 'has-error':'address'}}">
                <strong>phone</strong>
                <input type="number" name="phone" class="form-control" placeholder="address">
                <span class="text-danger">{{$errors->first('phone')}}</span>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="submit" class="btn btn-primary">Add New</button>
        </div>
    </form>
    @endsection