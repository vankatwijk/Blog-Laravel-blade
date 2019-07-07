
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
          <li class="@yield('homeSelect') {{Request::is('/')? 'fh5co-active' : ''}}">
            <a href="/">Home</a>
          </li>
          <li class="@yield('blogSelect')">
            <a href="/blog">Blog</a>
          </li>
          <li class="@yield('aboutSelect')">
            <a href="/about">About us</a>
          </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a href="contact" class="fh5co-nav-call-to-action js-fh5co-nav-call-to-action @yield('contactSelect')">Let's Chat</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>

      </nav>
    </div>
    <!-- Main Nav -->
  </div>
</header>
<!-- Header -->
