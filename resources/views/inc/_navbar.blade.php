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
        <li class="nav-item active">
          <a class="{{ Request::is ('/') ? 'active': ''}}" href="/">Home</a></li>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('about') ? 'active': ''}}" href="/about">About</a>
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
          <a class="{{ Request::is ('merch') ? 'active': ''}}" href="/merch">Merch</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('contact') ? 'active': ''}}" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="{{ Request::is ('more') ? 'active': ''}}" href="/more">..and Much More!</a>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            My Account
          </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item {{ Request::is ('blog_entry') ? 'active': ''}}" href="/blog_entry">Blog Entry for Admin</a>
        </div>
      </li>
      </ul>
    </div>
  </nav>
</div>
