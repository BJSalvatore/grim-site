<div class="row">
  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-dark" style="width: 100%">
    <!-- <a class="navbar-brand" style="font-family: Freckle Face; color: #FF8C00; padding-left: 20px" href="#">The Grim</a> -->
    <a class="navbar-brand"><img src="{{ asset('assets/images/converseRed.png') }}" style="width: 60px; margin-left: 20px;"></img></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Press</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Photos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Merch</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">..and Much More!</a>
        </li>
      </ul>
    </div>
  </nav>
</div>


 <!-- <ul class="nav navbar-nav float-right">
        <li><a class="{{ Request::is ('/') ? 'active': ''}}" href="/">Home</a></li>
        <li><a class="{{ Request::is ('about') ? 'active': ''}}" href="/about">About</a></li>
        <li><a class="{{ Request::is ('contact') ? 'active': ''}}" href="/contact">Contact</a></li>
        <li><a class="{{ Request::is ('profile') ? 'active': ''}}" href="/profile">Profile</a></li>
        <li><a class="{{ Request::is ('serviceSearch') ? 'active': ''}}" href="/serviceSearch">Pet Services</a></li>
        <li><a class="{{ Request::is ('petSearch') ? 'active': ''}}" href="/petSearch">Pet Search</a></li>
        @auth
          @if (Auth::user()->admin)
            <li><a class="{{ Request::is ('messages') ? 'active': ''}}" href="/messages">Messages</a></li>
            <li><a class="{{ Request::is ('users') ? 'active': ''}}" href="/users_index">Users</a></li>
          @endif
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Auth::user()->name }}</a>
              <ul class="dropdown-menu">
                 <li><a class ="nav-link" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">Logout</a></li>
              </ul>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                           {{ csrf_field() }}
              </form>
            </li>
            @else
          <li class="nav-item">
            <a class ="nav-link" href="{{ route('login') }}">Login</a>
          </li>
          <li class="nav-item">
            <a class ="nav-link" href="{{ route('register') }}">Register</a>
          </li>
        @endauth -->
