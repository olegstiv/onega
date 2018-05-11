@extends('default.layouts.template')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('content')
    {{var_dump($var)}}
    <form method="get" action="{{ route('contact') }}">
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input value="{{old('Name')}}" type="text" class="form-control" name="Name" id="exampleInputName1" placeholder="Enter name">
        </div>
         <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input value="{{old('Email')}}" type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-descibedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
         <div class="form-group">
            <label for="exampleInputSite1">Site</label>
            <input value="{{old('Site')}}" type="text" class="form-control" name="Site" id="exampleInputSite1" placeholder="Enter site">
        </div>
        <div class="form-group">
            <label for="exampleFormControlComment1">Text</label>
            <textarea class="form-control" id="exampleFormControlComment1" name="About" rows="3">{{old('About')}}</textarea>
        </div>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">﻿
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

@section('sidebar-left')
    @parent
@endsection
