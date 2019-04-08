<meta name="csrf-token" content="{{ csrf_token() }}">

<div class="row">
  <nav class="navbar navbar-fixed-top navbar-expand-lg navbar-light bg-dark" style="width: 100%">

    @if(Request::is('home'))
    <a class="navbar-brand"><img src="{{ asset('assets/images/converseOrange.png') }}" style="width: 60px; margin-left: 20px;"></img></a>
    @else
    <a class="navbar-brand"><img src="{{ asset('assets/images/TheGrimLogoWhitewTrans.png') }}" style="width: 60px; margin-left: 20px;"></img></a>
    @endif

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav w-100 nav-justified">
        @guest
        <li class="nav-item active">
          <a class="{{ Request::is ('/') ? 'active': ''}}" href="/">Home</a></li>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('about') ? 'active': ''}}" href="/about">Discography</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('press') ? 'active': ''}}" href="/press">Press</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('photos') ? 'active': ''}}" href="/photos">Photos</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('blog') ? 'active': ''}}" href="/blog">Blog</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('shop') ? 'active': ''}}" href="/shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('contact') ? 'active': ''}}" href="/contact">Contact</a>
        </li>
        <li class="nav-item active">
          <a class="{{ Request::is ('register') ? 'active': ''}}" href="/auth/register">Register</a></li>
        <li class="nav-item active">
          <a class="{{ Request::is ('login') ? 'active': ''}}" href="/auth/login">Login</a></li>
        </li>
        @endguest

        @if (auth()->check())
        <li class="nav-item active">
          <a class="{{ Request::is ('/') ? 'active': ''}}" href="/">Home</a></li>
        </li>
          @if(auth()->user()->isAdmin())
        <li class="nav-item active">
          <a class="{{ Request::is ('blog') ? 'active': ''}}" href="/posts/create">Create New Blog Post</a></li>
        </li>
        <li class="nav-item active">
          <a class="{{ Request::is ('posts') ? 'active': ''}}" href="/posts">View All Blog Post</a></li>
        </li>
        <li class="nav-item active">
          <a class="{{ Request::is ('files') ? 'active': ''}}" href="/files">Manage Files</a></li>
        </li>
        <li class="nav-item active">
          <a class="{{ Request::is ('inventory') ? 'active': ''}}" href="/inventory">Inventory</a></li>
        </li>
          @endif
        <li class="nav-item active">
          <a href="{{ url('/logout') }}"> Logout </a>
        </li>
        @endif


        <!-- <li class="nav-item active">
          <a class="{{ Request::is ('auth/admin') ? 'active': ''}}" href="/auth/admin">Add New Admin</a></li>
        </li> -->
        <!-- <li class="nav-item active">
          <a class="{{ Request::is ('files') ? 'active': ''}}" href="/files">Files</a></li>
        </li> -->

      </ul>
    </div>
  </nav>
</div>
