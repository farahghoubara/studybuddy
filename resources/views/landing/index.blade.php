@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="bg-light">
        <div class="main_container mt-0 pt-4">
            <div class="row d-flex align-items-center">
                <div class="col-7">
                    <div class="slogan">
                        <h1 class="font-900-lg">EMBRACE<br>MODERN LEARNING.<br>IT'S TIME FOR A CHANGE WITH</h1>
                        <h1 class="font-900-xl identity_color">STUDYBUDDY</h1>
                    </div>
                    <div class="buttons-cta"><a href="#"
                        class="st-primary-button-1 w-button">Dicover Public Rooms</a></div>
                </div>
                <div class="col-5">
                    <img style="max-width: 600px" src="{{ asset('images/landing_1.png') }}" alt="Study">
                </div>
            </div>

            {{-- <div class="col-1">
                <div class="row">
                    <button type="button" class="btn btn-outline-primary btn-lg">Primary</button>
                </div>
            </div> --}}
            {{-- <div class="row">
                <div class="offset-1 col-2">
                    <div class="row">
                    <button type="button" class="btn btn-outline-primary btn-lg">Primary</button>
                </div>
                </div>
            </div> --}}

        </div>
    </div>
@endsection
