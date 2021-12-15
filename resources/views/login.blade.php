@extends('layout.master')

@section('title')
    <title>Iter | Login</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('section')
    <main>
        <div class="login-form-container">

            <div class="content">
                <h1>Welcome Back! Please <span class="login-word">Login</span>
    To Your Account.</h1>
                <div class="container">
                    <form action="#">
                        <div class="userdata">
                            <div class="userinputdata username">
                                <span class="details">Username</span>
                                <input type="contents" placeholder="Enter your username" required>
                            </div>
                            <div class="userinputdata password">
                                <span class="details">Password</span>
                                <input type="contents" placeholder="Enter your password" required>
                            </div>
                        </div>
                        <input class="button" type="submit" value="Submit">
                    </form>
                </div>
                <div class="register">Don’t have an account? <a href="/register" id="register-link">Register here!</a></div>
            </div>
        </div>
        <div class="login-picture-container">
            <img src="{{ url('/assets/login-picture.jpg')}}" alt="" class="login-picture">
        </div>
    </main>
    
@endsection