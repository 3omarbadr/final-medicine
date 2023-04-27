<nav>
    <ul>
        <li>
            @guest
            @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
        @endif

        @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else
        <li class="nav-item dropdown">
            <div class="dropdown">
                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #333; background-color: #f8f9fa;">
                  {{ Auth::user()->name }}
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color: #343a40;">
                  <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item" type="submit" style="color: #fff;">Logout</button>
                  </form>
                </div>
              </div>
              
        </li>
        @endguest
        </li>
        <li><a href="#">About</a></li>
        <li><a href="{{route('web.medicines.index')}}">Medicine</a></li>
        <li><a href="{{route('web.news.index')}}">News</a></li>
    </ul>
</nav>