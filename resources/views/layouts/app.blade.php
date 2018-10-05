@include('inc._head')

<body style="background-color: silver;">

<div id="app" class="container m-4 p-0">
  @include('inc._messages')
  @yield('content')
</div>

  @include('inc._footer')

</body>
</html>
