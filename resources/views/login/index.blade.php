@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="login-section d-flex align-items-center justify-content-center">
        <div class="wrapper">
            <div class="from-box login box login-box">
                <h2>Login</h2>
                <form action="login.html">
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="Email" placeholder="Email" required>
                    </div>
                    <div class="input-box">
                        <span class="icon"></span>

                        <input type="Password" placeholder="Password" required>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> Remeber me</label>
                        <a href="{{ route('forget-password') }}" class="Forget-link">Forget Password?</a>
                    </div>
                    <button type="submit" class="btn">Login</button>
                    <div class="login-register">
                        <p>Don't have an account ? <a href="{{ route('register') }}" class="register-link">&nbsp;Register</a> </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
