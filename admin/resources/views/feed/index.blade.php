@extends('layouts.app')

@section('title', 'Feeds')

@section('sidebar')
    @parent
@endsection

@section('content')
    <div class="container">
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <p>{{ \Session::get('success') }}</p>
            </div><br />
        @endif
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Feed</th>
                <th>Username</th>
                <th>Login</th>
                <th colspan="2">Action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($feeds as $feed)
                <tr>
                    <td>{{$feed->id}}</td>
                    <td>{{$feed->type}}</td>
                    <td>{{$feed->username}}</td>
                    <td>{{$feed->login}}</td>
                    <td><a href="{{action('FeedController@edit', $feed->id)}}" class="btn btn-warning">Edit</a></td>
                    <td>
                        <form action="{{action('FeedController@destroy', $feed->id)}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
