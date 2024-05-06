@extends('layouts.app')

@section('title', 'Rooms')

@section('content')
    @if (Session::has('success'))
    <div data-mdb-alert-init="" class="alert alert-success" role="alert" data-mdb-color="success"
        data-mdb-alert-initialized="true"><i class="fas fa-check-circle me-3"></i>{{ Session::get('success') }}</div>
    @endif

    @if (Auth::user())
        <div class="section_2_landing">
            <div class="row d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1000">
                <div class="slogan">
                    <h1 class="font-600-lg identity_color text-center">Hi, {{ $user->name }}!</h1>
                    <h4 class="text-center  m-0">Get ready to dive into your studies and make the most of it!</h4>
                </div>
            </div>
            <div class="row d-flex justify-content-center" data-aos="fade-left" data-aos-duration="1000">
                <img class="" style="max-width: 500px" src="{{ asset('images/user-focus.svg') }}" alt="Study">
            </div>
            <div class="row" data-aos="fade-right" data-aos-duration="1000">
                <div class="buttons-cta d-flex justify-content-center align-items-center">
                    <a href="#" class="st-primary-button-1 w-button" data-bs-toggle="modal"
                        data-bs-target="#createRoomModal">Create your room now</a>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <h1 class="text-center mt-4" data-aos="fade-right" data-aos-duration="1000">OR</h1>
                <img data-aos="fade-up" data-aos-duration="1000" style="max-width: 300px"
                    src="{{ asset('images/down-arrow.png') }}" alt="Study">
            </div>
        </div>
    @endif
    <div class="main_container" data-aos="fade-up" data-aos-duration="1000">
        <div class="row d-flex align-items-center">
            <div class="col-6">
                <h1>Public Rooms</h1>
            </div>
            <div class="offset-3 col-3">
                <div class="input-group">
                    <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                        aria-describedby="search-addon" />
                    <button type="button" class="btn btn-outline-primary">search</button>
                </div>
            </div>
        </div>
        <hr>
        <div class="container-fluid rooms">
            <div class="row">
                @foreach ($rooms as $room)
                    <div class="col-lg-4 col-3  d-flex justify-content-center mb-5">
                        <div class="room_card">
                            <div class="row rounded-top d-flex justify-content-center align-items-center wallpaper"
                                style="background-image: url('/images/{{ $room->getWallpaper->path }}');">
                                <div class="my-auto text-white room_name_div">
                                    <span class="bg-dark room_name">{{ $room->name }}</span>
                                </div>
                            </div>
                            <div class="row bg-dark rounded-bottom room_info">
                                <div class="container">
                                    <div class="row d-flex align-items-center">
                                        <div class="col-5">
                                            <h6 class="text-white mb-0"><i class="fa-solid fa-microphone-lines"></i> {{ $room->user_id }}</h6>

                                            </h6>
                                        </div>
                                        <div class="col-7 d-flex justify-content-end">
                                            <div class="my-auto text-white room_category_div">
                                                <span
                                                    class="identity_background room_category">{{ $room->getCategory->name }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4 room_description">
                                        <p class="text-white">{{ $room->description }} </p>
                                    </div>
                                    <div class="row d-flex justify-content-center">
                                        <div class="buttons-cta-3">
                                            <a href="{{ route('schedule') }}" class="st-primary-button-3 w-button">
                                                <i class="fa-solid fa-angle-right"></i> Join Room
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    @include('rooms._create_modal')

@endsection
@push('scripts')
    <script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function() {
            window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000);
        })
    </script>
@endpush
