@extends('layout')
@section('title', 'Home')
@section('head')
@endsection
@section('body')
    <div class="container">
        <h1>Home</h1>
        Welcome back, {{ Auth::user()->name }} !
        <form action="/Auth/logout" method="GET">
            {!! csrf_field() !!}
            <input type="submit" value="LOGOUT" />
        </form>
    </div>
@endsection
@section('tail')
@endsection