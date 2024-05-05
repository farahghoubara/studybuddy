@extends('layouts.app')

@section('title', 'Public Rooms')

@section('content')
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
                <div class="buttons-cta d-flex justify-content-center align-items-center"><a
                        href="{{ route('private-rooms') }}" class="st-primary-button-1 w-button">Create your private room
                        now</a>
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
                <div class="col-lg-4 col-3  d-flex justify-content-center mb-5">
                    <div class="room_card">
                        <div class="row rounded-top d-flex justify-content-center align-items-center wallpaper"
                            style="background-image: url('{{ asset('images/wallpaper-one.jpg') }}');">
                            <div class="my-auto text-white room_name_div">
                                <span class="bg-dark room_name">Focus Room</span>
                            </div>
                        </div>
                        <div class="row bg-dark rounded-bottom room_info">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-5">
                                        <h6 class="text-white mb-0"><i class="fa-solid fa-microphone-lines"></i> Farah Hany
                                        </h6>
                                    </div>
                                    <div class="col-7 d-flex justify-content-end">
                                        <div class="my-auto text-white room_category_div">
                                            <span class="identity_background room_category">{{ $categories[0] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 room_description">
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Eligendi
                                        voluptatibus suscipit</p>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="buttons-cta-3"><a href="{{ route('schedule') }}"
                                            class="st-primary-button-3 w-button"><i class="fa-solid fa-angle-right"></i>
                                            Join
                                            Room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-3 d-flex justify-content-center mb-5">
                    <div class="room_card">
                        <div class="row rounded-top d-flex justify-content-center align-items-center wallpaper"
                            style="background-image: url('{{ asset('images/wallpaper-two.jpg') }}');">
                            <div class="my-auto text-white room_name_div">
                                <span class="bg-dark room_name">Lets study
                                    guyssss</span>
                            </div>
                        </div>
                        <div class="row bg-dark rounded-bottom room_info">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-5">
                                        <h6 class="text-white mb-0"><i class="fa-solid fa-microphone-lines"></i> Omar Younes
                                        </h6>
                                    </div>
                                    <div class="col-7 d-flex justify-content-end">
                                        <div class="my-auto text-white room_category_div">
                                            <span class="identity_background room_category">{{ $categories[1] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 room_description">
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Eligendi
                                        voluptatibus suscipit</p>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="buttons-cta-3"><a href="{{ route('schedule') }}"
                                            class="st-primary-button-3 w-button"><i class="fa-solid fa-angle-right"></i>
                                            Join
                                            Room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-3 d-flex justify-content-center mb-5">
                    <div class="room_card">
                        <div class="row rounded-top d-flex justify-content-center align-items-center wallpaper"
                            style="background-image: url('{{ asset('images/wallpaper-three.jpg') }}');">
                            <div class="my-auto text-white room_name_div">
                                <span class="bg-dark room_name">Computer Science
                                    Room</span>
                            </div>
                        </div>
                        <div class="row bg-dark rounded-bottom room_info">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-5">
                                        <h6 class="text-white mb-0"><i class="fa-solid fa-microphone-lines"></i> Farah
                                            Ghoubara
                                        </h6>
                                    </div>
                                    <div class="col-7 d-flex justify-content-end">
                                        <div class="my-auto text-white room_category_div">
                                            <span class="identity_background room_category">{{ $categories[2] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 room_description">
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Eligendi
                                        voluptatibus suscipit</p>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="buttons-cta-3"><a href="{{ route('schedule') }}"
                                            class="st-primary-button-3 w-button"><i class="fa-solid fa-angle-right"></i>
                                            Join
                                            Room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-3 d-flex justify-content-center mb-5">
                    <div class="room_card">
                        <div class="row rounded-top d-flex justify-content-center align-items-center wallpaper"
                            style="background-image: url('{{ asset('images/wallpaper-four.jpg') }}');">
                            <div class="my-auto text-white room_name_div">
                                <span class="bg-dark room_name">Arab Open University
                                    Room</span>
                            </div>
                        </div>
                        <div class="row bg-dark rounded-bottom room_info">
                            <div class="container">
                                <div class="row d-flex align-items-center">
                                    <div class="col-5">
                                        <h6 class="text-white mb-0"><i class="fa-solid fa-microphone-lines"></i> Omar
                                            Derbala
                                        </h6>
                                    </div>
                                    <div class="col-7 d-flex justify-content-end">
                                        <div class="my-auto text-white room_category_div">
                                            <span class="identity_background room_category">{{ $categories[3] }}</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-4 room_description">
                                    <p class="text-white">Lorem ipsum dolor sit amet consectetur
                                        adipisicing elit. Eligendi
                                        voluptatibus suscipit</p>
                                </div>
                                <div class="row d-flex justify-content-center">
                                    <div class="buttons-cta-3"><a href="{{ route('schedule') }}"
                                            class="st-primary-button-3 w-button"><i class="fa-solid fa-angle-right"></i>
                                            Join
                                            Room</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection
@push('scripts')
    <script type='text/javascript'>
        document.addEventListener('DOMContentLoaded', function() {
            window.setTimeout(document.querySelector('svg').classList.add('animated'), 1000);
        })
    </script>
@endpush
