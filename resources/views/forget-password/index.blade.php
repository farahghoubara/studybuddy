@extends('layouts.app')

@section('title', 'Forget Password')

@section('content')
    <div class="login-section d-flex align-items-center justify-content-center">
        <div class="wrapper">
            <div class="from-box login box forget-password-box">
                <h2>Forget Password</h2>
                <form action="{{ route('reset.password') }}" method="POST">
                    @csrf
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required class="@error('email') is-invalid @enderror">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="password" name="password" placeholder="New Password" required class="@error('password') is-invalid @enderror">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-box">
                        <span class="icon"></span>
                        <input type="password" name="password_confirmation" placeholder="Confirm New Password" required>
                    </div>
                    <button type="submit" class="btn">Reset Password</button>
                </form>
            </div>
        </div>
    </div>
@endsection
