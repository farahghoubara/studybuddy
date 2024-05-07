@extends('layouts.app')

@section('title', 'Practice')

@section('content')
    <div class="main_container" style="min-height: 65vh;">
        <div class="section_2_landing">
            <div class="row d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
                <div class="slogan">
                    <h1 class="font-600-lg identity_color text-center">Your path to success starts with practice!</h1>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <img class="" style="max-width: 500px" src="{{ asset('images/exam.svg') }}" alt="Study">
            </div>
            <div class="row" data-aos="fade-left" data-aos-duration="1000">
                <div class="buttons-cta d-flex justify-content-center align-items-center">
                        <a href="#" data-bs-toggle="modal"
                        data-bs-target="#startTestModal" class="st-primary-button-1 w-button">Practice Now</a>
                </div>
            </div>
        </div>
    </div>
    @include('practice._create_test_modal')

@endsection
