@extends('layouts.room.app')

@section('title', $room->name)

@section('content')
    <div class="container-fluid">
        <div class="row d-flex align-items-start">
            <div class="col-4">
                <div class="text-white room_name_div">
                    <img style="max-width: 100px;" src="{{ asset('images/live.png') }}" alt="live">
                </div>
                <span class="party_name"><i class="fa-solid fa-microphone-lines"></i> {{ $room->getUser->username }}</span>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <h3 class="m-0 party_user_name text-center">
                    {{ $room->name }}<br><span class="text-center identity_color"
                        style="font-size: 18px;">{{ $room->getCategory->name }}</span></h3>
            </div>
            @if ($room->type == 'private')
                <div class="col-4 d-flex justify-content-end">
                    <img style="max-width: 80px;" src="{{ asset('images/private.png') }}" alt="private">
                </div>
            @endif
        </div>
    </div>
    <div class="container-fluid video_rooms">
        <div class="row d-flex align-items-start">
            <div class="col-3">
                <div class="video-container video-container d-flex justify-content-center" title="{{ $user->username }}">
                    <video class="video_room" id="video" width="250px" height="189px" autoplay playsinline></video>
                    <img class="video_room" id="noWebcam" width="250px" height="189px"
                        src="{{ asset('images/icon-no-webcam.gif') }}" style="display: none;">
                    <div class="hover-text">{{ $user->username }}</div>
                </div>
                <p class="text-center mt-1">
                    <button class="btn text-white identity_background" id="toggleWebcam"><i
                            class="fa-solid fa-video"></i></button>
                    <button class="btn text-white identity_background" id="toggleMute" onclick="changeIcon()"><i
                            class="fa-solid fa-microphone"></i></button>
                </p>
            </div>
            <div class="col-3">
                <div class="video-container video-container d-flex justify-content-center">
                    <img class="video_room bg-dark" width="250px" height="189px" src="{{ asset('images/add_video.png') }}">
                </div>
            </div>
            <div class="col-3">
                <div class="video-container video-container d-flex justify-content-center">
                    <img class="video_room bg-dark" width="250px" height="189px" src="{{ asset('images/add_video.png') }}">
                </div>
            </div>
            <div class="col-3">
                <div class="video-container video-container d-flex justify-content-center">
                    <img class="video_room bg-dark" width="250px" height="189px"
                        src="{{ asset('images/add_video.png') }}">
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-start" style="margin-top: 30px">
            <div class="col-3">
                <div class="video-container video-container d-flex justify-content-center">
                    <img class="video_room bg-dark" width="250px" height="189px"
                        src="{{ asset('images/add_video.png') }}">
                </div>
            </div>
            <div class="col-3">
                <div class="video-container video-container d-flex justify-content-center">
                    <img class="video_room bg-dark" width="250px" height="189px"
                        src="{{ asset('images/add_video.png') }}">
                </div>
            </div>
            <div class="col-3">
                <div class="video-container video-container d-flex justify-content-center">
                    <img class="video_room bg-dark" width="250px" height="189px"
                        src="{{ asset('images/add_video.png') }}">
                </div>
            </div>
            <div class="col-3">
                <div class="video-container video-container d-flex justify-content-center">
                    <img class="video_room bg-dark" width="250px" height="189px"
                        src="{{ asset('images/add_video.png') }}">
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center" style="margin-top: 50px">
            <div class="col-3">
                @if ($room->getUser->id == $user->id)
                    <!-- Delete room form -->
                    <form id="deleteRoomForm" action="{{ route('rooms.destroy', $room) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="button" class="btn btn-danger p-3" title="Delete Room" data-bs-toggle="modal"
                            data-bs-target="#deleteRoomModal"><i class="fa-solid fa-power-off"
                                style="font-size: 28px"></i></button>
                    </form>
                @endif
            </div>
            <div class="col-6">
                <div class="video-container video-container d-flex justify-content-center">
                    <audio id="audio" controls>
                        <source src="{{ asset('audio/Snape_and_lily_music.mp3') }}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <p class="text-center mt-3">
                    <button class="btn text-light identity_background" id="prevSong"><i
                            class="fa-solid fa-step-backward"></i></button>
                    <button class="btn text-light identity_background" id="playPause"><i
                            class="fa-solid fa-play"></i></button>
                    <button class="btn text-light identity_background" id="nextSong"><i
                            class="fa-solid fa-step-forward"></i></button>
                </p>
            </div>
            <div class="col-3 d-flex justify-content-end">
                <a href="{{ route('rooms') }}" title="Back">
                    <button class="btn btn-dark p-3">Back</button>
                </a>
            </div>
        </div>
    </div>
    <div class="modal fade" id="deleteRoomModal" tabindex="-1" aria-labelledby="deleteRoomModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteRoomModalLabel">Confirm Delete Room</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this room?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger"
                        onclick="document.getElementById('deleteRoomForm').submit()">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        const video = document.getElementById('video');
        const noWebcamImg = document.getElementById('noWebcam');
        const toggleWebcamBtn = document.getElementById('toggleWebcam');

        let stream = null;
        let webcamActive = false;

        // Function to start webcam
        async function startWebcam() {
            try {
                stream = await navigator.mediaDevices.getUserMedia({
                    video: true
                });
                video.srcObject = stream;
                noWebcamImg.style.display = "none";
                video.style.display = "block";
                webcamActive = true;
                toggleWebcamBtn.innerHTML = '<i class="fa-solid fa-video"></i>';
            } catch (err) {
                console.error('Error accessing webcam', err);
            }
        }

        // Function to stop webcam
        function stopWebcam() {
            if (stream) {
                const tracks = stream.getTracks();
                tracks.forEach(track => {
                    track.stop();
                });
                video.srcObject = null;
                noWebcamImg.style.display = "block";
                video.style.display = "none";
                webcamActive = false;
                toggleWebcamBtn.innerHTML = '<i class="fa-solid fa-video-slash"></i>';
            }
        }

        // Call startWebcam function when the page loads
        window.addEventListener('load', () => {
            startWebcam();
        });

        // Add event listener to the toggle webcam button
        toggleWebcamBtn.addEventListener('click', () => {
            if (webcamActive) {
                stopWebcam();
            } else {
                startWebcam();
            }
        });
    </script>
    <script>
        const audio = document.getElementById('audio');
        const playPauseBtn = document.getElementById('playPause');
        const prevSongBtn = document.getElementById('prevSong');
        const nextSongBtn = document.getElementById('nextSong');
        let currentSongIndex = 0;

        const songs = [
            "{{ asset('audio/Snape_and_lily_music.mp3') }}",
            "{{ asset('audio/Harry_Potter_Ambient_Music.mp3') }}",
            "{{ asset('audio/Night_King.mp3') }}",
        ];



        function changeIcon() {
            var icon = document.querySelector('#toggleMute i');
            if (icon.classList.contains('fa-microphone')) {
                icon.classList.remove('fa-microphone');
                icon.classList.add('fa-microphone-slash');
            } else {
                icon.classList.remove('fa-microphone-slash');
                icon.classList.add('fa-microphone');
            }
        }

        function playPause() {
            if (audio.paused) {
                audio.play();
                playPauseBtn.innerHTML = '<i class="fa-solid fa-pause"></i>';
            } else {
                audio.pause();
                playPauseBtn.innerHTML = '<i class="fa-solid fa-play"></i>';
            }
        }


        // Function to play the next song
        function nextSong() {
            currentSongIndex = (currentSongIndex + 1) % songs.length;
            audio.src = songs[currentSongIndex];
            audio.play();
            playPauseBtn.innerHTML = '<i class="fa-solid fa-pause"></i>';
        }

        // Function to play the previous song
        function prevSong() {
            currentSongIndex = (currentSongIndex - 1 + songs.length) % songs.length;
            audio.src = songs[currentSongIndex];
            audio.play();
            playPauseBtn.innerHTML = '<i class="fa-solid fa-pause"></i>';
        }

        // Add event listeners to control music
        playPauseBtn.addEventListener('click', playPause);
        nextSongBtn.addEventListener('click', nextSong);
        prevSongBtn.addEventListener('click', prevSong);
    </script>
@endpush
