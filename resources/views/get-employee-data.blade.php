@extends('layouts/default')

@section('content')
<form name="employee-form" id="employee-form" method="post" action="{{route('store-form')}}">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" id="name" name="name" class="form-control" required="true">
    </div>

    <div class="form-group">
        <label for="last_name">Last name</label>
        <input type="text" id="last_name" name="last_name" class="form-control" required="true">
    </div>


    <div class="form-group">
        <label for="post">Post</label>
        <input type="text" id="post" name="post" class="form-control" required="true">
    </div>


    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" required="true">
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" id="address" name="address" class="form-control" required="true" >
    </div>

    <div class="form-group">
        <label for="workdata">Description</label>
        <textarea id="workdata" name="workdata" class="form-control" required="true"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Save</button>
</form>

@stop