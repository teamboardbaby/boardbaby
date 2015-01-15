@extends('layouts.signup')

@section('title')
    <title>BoardBaby | Login</title>
@stop

@section('content')
    <h3><br>Celebrate your Baby!</h3>
    <!--<p>
        Celebrate your Baby
    </p>-->
    <!--<p>Get Started by Logging in!</p>-->
    <form class="m-t" role="form" action="index.html">
        <div class="form-group">
            <input type="email" class="form-control" placeholder="Username" required="">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" required="">
        </div>
        <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

        <a href="/forgot"><small>Forgot password?</small></a>
        <p class="text-muted text-center"><small>Do not have an account?</small></p>
        <a class="btn btn-sm btn-white btn-block" href="/register">Create an account</a>
    </form>
    <p class="m-t"> <small>Intuitive Inventions LLC &copy; 2015</small> </p>
@stop