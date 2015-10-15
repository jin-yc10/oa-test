@extends('layout')
@section('title', 'register')
@section('head')
@endsection
@section('body')
    <div class="container">
        <h1>Test Register</h1>
        @if(Session::has('message'))
            <p class="bg-danger"> {{ Session::get('message') }} </p>
        @endif
        @if(Session::has('errors'))
            <div class="alert alert-error bg-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                @foreach ($errors->all() as $error)
                    {{ $error }} <br/>
                @endforeach
            </div>
        @endif
        <form method="POST" action="/Auth/register">
            <!-- Form Contents -->
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="name">Email address</label>
                <input type="text" class="form-control" id="name" name='name' placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name='email' placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name='password' placeholder="Password">
            </div>
            <div class="form-group">
                <label for="password_confirmation">Password Confirmation</label>
                <input type="password" class="form-control" id="password_confirmation" name='password_confirmation' placeholder="Password Confirmation">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection
@section('tail')
@endsection