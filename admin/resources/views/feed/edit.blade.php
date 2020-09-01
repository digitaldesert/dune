@extends('layouts.app')

@section('title', 'Create a Feed')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container">
        <h2>Feed Update</h2><br/>
        <div class="container">
        </div>
        <form method="post" action="{{action('FeedController@update', $id)}}">
            @csrf
            <div class="row">
                <div class="col-2"></div>
                <div class="form-group col-8">
                    <label for="type">Type:</label>
                    <input type="text" class="form-control" name="type" value="{{$feed->type}}">
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="form-group col-8">
                    <label for="Username">Username:</label>
                    <input type="text" class="form-control" name="username" value="{{$feed->username}}">
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="form-group col-8">
                    <label for="password">Password:</label>
                    <input type="text" class="form-control" name="password" value="{{$feed->password}}">
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="form-group col-8">
                    <label for="login">Login:</label>
                    <input type="text" class="form-control" name="login" value="{{$feed->login}}">
                </div>
                <div class="col-2"></div>
            </div>
            <div class="row">
                <div class="col-2"></div>
                <div class="form-group col-8">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                <div class="col-2"></div>
            </div>
        </form>
    </div>

@endsection
