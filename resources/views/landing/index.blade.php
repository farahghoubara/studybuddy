@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="section_1_landing bg-light" data-aos="fade-down" data-aos-duration="1000">
        <div class="row d-flex align-items-center">
            <div class="col-7">
                <div class="slogan">
                    <h1 class="font-900-lg">EMBRACE<br>MODERN LEARNING.<br>IT'S TIME FOR A CHANGE WITH</h1>
                    <h1 class="font-900-xl identity_color">STUDYBUDDY</h1>
                </div>
                <div class="buttons-cta d-flex align-items-center"><a href="{{ route('public-rooms') }}"
                        class="st-primary-button-1 w-button">Dicover Public Rooms</a>
                    <span>Seeking calm? Create your <a href="{{ route('private-rooms') }}">Private Room</a></span>
                </div>
            </div>
            <div class="col-5">
                <img class="floating-image-vertical" style="max-width: 700px" src="{{ asset('images/landing_1.png') }}"
                    alt="Study">
            </div>
        </div>
    </div>
    <div class="section_2_landing bg-dark" data-aos="fade-down" data-aos-duration="1000">
        <div class="row d-flex justify-content-center">
            <img class="floating-image" style="max-width: 500px" src="{{ asset('images/Timeline-bro.png') }}"
                alt="Study">
        </div>
        <div class="row d-flex justify-content-center">
            <div class="slogan">
                <h1 class="font-600-lg text-white text-center">Powerful Learning, Anytime, Anywhere.<br>Your
                    Personalized Study Schedule Solution!</h1>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="buttons-cta-2"><a href="{{ route('schedule') }}" class="st-primary-button-2 w-button">Create Your
                    Schedule</a>
            </div>
        </div>
    </div>
    <div class="section_1_landing bg-light"data-aos="fade-down" data-aos-duration="1000">
        <div class="row d-flex align-items-center">
            <div class="col-7">
                <div class="slogan">
                    <h1 class="font-600-lg">Master Your Subjects, Power Through Practice:<br>Tailored Learning for Academic
                        Excellence!</h1>
                </div>
                <div class="buttons-cta d-flex align-items-center"><a href="{{ route('questions') }}"
                        class="st-primary-button-1 w-button">Practice Now</a>
                </div>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <img class="floating-image-vertical" style="max-width: 500px" src="{{ asset('images/Online-test.png') }}"
                    alt="Study">

            </div>
        </div>
    </div>
@endsection
