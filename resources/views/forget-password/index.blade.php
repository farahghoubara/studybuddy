@extends('layouts.app')

@section('title', 'Forget Password')

@section('content')
    <div class="login-section d-flex align-items-center justify-content-center">
        <div class="wrapper">
            <div class="from-box login box forget-password-box">
                <h2>Forget Password</h2>
                <form action="forget_password.html">
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="email" placeholder="Email" required>
                    </div>
                    <button type="submit" class="btn">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
