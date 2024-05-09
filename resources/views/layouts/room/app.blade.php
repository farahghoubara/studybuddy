<!DOCTYPE html>
<html lang="en">

@include('layouts._head')

<body class="party_wallpaper m-3" style="background-image: url('/images/{{ $room->getWallpaper->path }}');">

    @yield('content')

    <script src="https://kit.fontawesome.com/4b60d6aef7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
