@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="login-section d-flex align-items-center justify-content-center">
        <div class="wrapper">
            <div class="from-box login box register-box">
                <h2>Register</h2>
                <form action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="text" name="name" placeholder="Name" class="@error('name') is-invalid @enderror" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="text" name="username" placeholder="Username" class="@error('username') is-invalid @enderror" value="{{ old('username') }}" required>
                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="email" name="email" placeholder="Email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="tel" name="phone" placeholder="Phone Number" class="@error('phone') is-invalid @enderror" value="{{ old('phone') }}" required>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-box">
                                <span class="icon"></span>
                                <input type="password" name="password" placeholder="Password" class="@error('password') is-invalid @enderror" required>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
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
        </div>
    </div>
@endsection
