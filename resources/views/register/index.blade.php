@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="login-section d-flex align-items-center justify-content-center">
        <div class="wrapper">
            <div class="from-box login box register-box">
                <h2>Register</h2>
                <form action="{{ route('register') }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="name" name="name" placeholder="Name" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="name" name="username" placeholder="Username" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="email" name="email" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="tel" name="phone" placeholder="Phone Number" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="password" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="password" name="password_confirmation" placeholder="Password Confirmation" required>
                            </div>
                        </div>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn">Register</button>
                    <div class="login-register">
                        <p>Already have an account? <a href="{{ route('login') }}" class="register-link">&nbsp;Login</a></p>
                    </div>
                </form>
            </div>
            {{-- test --}}
        </div>
    </div>
@endsection
