@extends('layout')
@section('title', 'login')
@section('head')
@endsection
@section('body')
    <div class="container">
        <h1>Test login</h1>
        @if(Session::has('message'))
            <p class="bg-danger"> {{ Session::get('message') }} </p>
        @endif
        @if(Session::has('errors'))
            @foreach(Session::get('errors') as $error)
                <p class="bg-danger"> {{ $error }} </p>
            @endforeach
        @endif
        <form method="POST" action="/Auth/login">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name='email' placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name='password' placeholder="Password">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> RememberMe
                </label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
@section('tail')
@endsection