<style>
    header {
        @if (!request()->routeIs('landing'))
            border-bottom: 3px solid #ccc;
        @endif
    }
</style>

<header>
    <nav class="navbar navbar-expand-sm bg-light text-dark">
        <div class="container-fluid">
            <div class="col-3">
                <a class="navbar-brand" href="{{ route('landing') }}">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" width="170" height="80">
                </a>
            </div>
            <div class="col-6 d-flex justify-content-center links">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <div class="row">
                            <div class="col">
                                <a class="nav-link {{ request()->routeIs('landing') ? 'active' : '' }}" href="{{ route('landing') }}">Home</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('public-rooms') ? 'active' : '' }}" href="{{ route('public-rooms') }}">Public Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('private-rooms') ? 'active' : '' }}" href="{{ route('private-rooms') }}">Private Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('schedule') ? 'active' : '' }}" href="{{ route('schedule') }}">Schedule</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('questions') ? 'active' : '' }}" href="{{ route('questions') }}">Exams Questions</a>
                    </li>
                </ul>
            </div>
            <div class="button col-3 d-flex justify-content-end">
                @if (Auth::guest())
                <div class="button col-3 d-flex justify-content-end">
                    <a href="{{ route('login') }}" class="Login">
                        <button class="btnLogin-popup">Login</button>
                    </a>
                </div>
                @else
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btnLogin-popup">Logout</button>
                </form>
                @endif
            </div>
        </div>
    </nav>
</header>
