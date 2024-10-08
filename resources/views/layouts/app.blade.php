<!DOCTYPE html>
<html lang="en">

@include('layouts._head')
<body>
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
    </script>
    <script src="https://kit.fontawesome.com/4b60d6aef7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
