<nav class="navbar sticky-top navbar-expand-sm">
    <div class="container ">
      @guest
          @if (Route::has('login'))
        <a class="navbar-brand navcolor1" href="{{ route('welcome') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        @endif
        @else
        <a class="navbar-brand navcolor1" href="{{ url('home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        @endguest
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto ">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link navcolor" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link navcolor" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                @if(Auth::user()->dj)
                <li class="nav-item">
                    <a class="nav-link navcolor" href="{{ route('eventmanager.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navcolor" href="{{ route('dj.availability.create') }}">Book Days Off</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navcolor" href="{{ route('dj.bookings.index') }}">Booking Notifications</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link navcolor" href="{{ route('eventmanager.home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navcolor" href="{{ route('eventmanager.page.availableDj') }}">DJ Roster</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link navcolor" href="{{ route('eventmanager.events.create') }}">Create Events <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
  <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></a>
                </li>
              @endif
                    <li class="nav-item dropdown dropdowncolor">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle navcolor" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                          @if(Auth::user()->dj)
                            <a href="{{ url('myprofile') }}"class="dropdown-item">
                              My Profile
                           </a>

                           @else
                             <a href="{{ url('my-profile') }}"class="dropdown-item">
                               My Profile
                            </a>
                            @endif

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
