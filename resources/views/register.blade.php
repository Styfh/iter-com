@extends('layout.master')

@section('title')
    <title>Iter | Register</title>
@endsection

@section('style')
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('section')
<main>
        <div class="register-form-container">
            <h1 class = "title">Register</h1>
            <div class="register-form-container content">
                <div class="container">
                    <form action="#">
                        <div class="userdata">
                            <div class="userinputdata username">
                                <span class="details">Username</span>
                                <input type="contents" placeholder="Enter your username." required>
                            </div>
                            <div class="userinputdata email">
                                <span class="details">Email</span>
                                <input type="contents" placeholder="Enter your email." required>
                            </div>
                            <div class="userinputdata username">
                                <span class="details">Password</span>
                                <input type="contents" placeholder="Enter your password." required>
                            </div>
                            <div class="userinputdata password">
                                <span class="details">Confirm Password</span>
                                <input type="contents" placeholder="Confirm your password." required>
                            </div>

                        </div>
                        <div class="button">
                            <input type="submit" value="SUBMIT">
                        </div>
                    </form>
                </div>
                <div class="register">Already have an account? <a href="/login">Login here!</a></div>
            </div>
        </div>
        <div class="register-picture-container">
            <img src="{{ url('/assets/register-picture.jpg')}}" alt="" class="register-picture">
        </div>
    </main>
@endsection