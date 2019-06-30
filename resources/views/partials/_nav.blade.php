
<!-- Header -->
<header id="fh5co-header" role="banner">
  <div class="container">
    <!-- Logo -->
    <div id="fh5co-logo">
      <a href="/">
        <img src="/images/logo.png" alt="Work Logo" height="80px">
      </a>

    </div>
    <!-- Logo -->

    <!-- Mobile Toggle Menu Button -->
    <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>

    <!-- Main Nav -->
    <div id="fh5co-main-nav">
      <nav id="fh5co-nav" role="navigation">
        <ul>
          <li class="@yield('homeSelect')">
            <a href="/">Home</a>
          </li>
          <li class="@yield('blogSelect')">
            <a href="blog">Blog</a>
          </li>
          <li class="@yield('aboutSelect')">
            <a href="about">About us</a>
          </li>
        </ul>
        <a href="contact" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action @yield('contactSelect')">Let's Chat</a>

        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

      </nav>
    </div>
    <!-- Main Nav -->
  </div>
</header>
<!-- Header -->
