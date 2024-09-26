<header id="header" class="header d-flex align-items-center sticky-top p-3 p-lg-0">
    <div class="container position-relative d-flex align-items-center">

        <a href="{{ route('home') }}" class="logo d-flex align-items-center me-auto">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">CySec</h1>
        </a>

        <nav id="navmenu" class="navmenu">
            <ul>
                @if (Route::is('home'))
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#quiz">Quiz</a></li>
                    <li><a href="#walkthrough">Walkthrough</a></li>
                    <li><a href="#about">Articles</a></li>
                    <li><a href="#comments">Comments</a></li>
                    <li><a href="#faq">FAQ</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                @else
                    <li><a href="{{ route('home') }}">Home</a></li>
                @endif

                <li class="dropdown">
                    @auth
                        <a href="#"><button class="btn-login toggle-dropdown">{{ Auth::user()->name }}</button></a>
                        <ul>
                            <li><a href="{{ route('user.profile.edit') }}">Profile</a></li>
                            <hr>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <li><a><button class="text-muted"
                                            style="border: none; background-color: rgb(255,255,255);">Logout</button></a>
                                </li>
                            </form>
                        </ul>
                    @else
                        <a href="{{ route('login') }}"><button class="btn-login">Login</button></a>
                    @endauth
                </li>

            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

    </div>
</header>
