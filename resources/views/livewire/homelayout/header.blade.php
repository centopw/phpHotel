<div id="fh5co-header">
    <header id="fh5co-header-section">
        <div class="container">
            <div class="nav-header">
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                <h1 id="fh5co-logo"><a href="{{ route('home') }}">phpHotel</a></h1>
                <nav id="fh5co-menu-wrap" role="navigation">
                    <ul class="sf-menu" id="fh5co-primary-menu">
                        <li><a class="active" href="{{ route('home') }}">Home</a></li>
                        <li>
                            <a href="/" class="fh5co-sub-ddown">Hotel</a>
                            <ul class="fh5co-sub-menu">
                                @foreach ($hotels_names as $hotels_name)
                                    <li><a href="{{ url('hotels/' . $hotels_name->name) }}">{{ $hotels_name->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ route('services') }}">Services</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        @if (Auth::check())
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">register</a></li>
                        @endif
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>
