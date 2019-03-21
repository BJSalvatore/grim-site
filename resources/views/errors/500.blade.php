<!DOCTYPE html>
<html>
<head>
    <title>Page not found - 404</title>
    <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<style>

@keyframes error-animation {
  0%   {top:10px;}
  10%   {top: 25px;}
  20%  {top: 50px;}
  30%   {top: 75px;}
  40%   {top: 100px;}
  50%  {top: 125px;}
  60% {top: 150px;}
  70%  {top: 175px;}
  80% {top: 200px;}
  90% {top: 225px;}
  100% {top: 250px;}
}

#animation div {
  display: flex;
  align-items: center;
  width: auto;
  height: 300px;
  position: relative;
  background-color: #FF8C00;
  border: 4px solid black;
  border-radius: 5px;
  text-align: center;
  animation-name: error-animation;
  animation-delay: 2s;
  animation-duration: 4s;
  animation-iteration-count: 3;
}

  h1 {
    float: right;
    margin-right: 40px;
  }

  h3 {
    float: center;
  }

  body {
    font-family: 'Open Sans', sans-serif;
    font-weight:bolder;
    background-repeat: space;
    padding: 100px;
    background-size: 150px auto;
    background-image: url("assets/images/converseGray.png");
    background-position: 50% 50%;
  }

</style>

</head>

<body>
  <div id="animation" class="align-content-center">
      <div id="message" class="flex-container align-content-center">
        <img src="{{ asset('assets/images/converseGray.png') }}" style="width: 175px; margin-left: 40px; margin-right: 40px;"></img>
          <h1><strong>Oops!<br>Something went wrong!</strong></h1>
          <h3><strong>Beth is working on it<br>as fast as she can!<br>Check back later.</strong></h3>
        <img src="{{ asset('assets/images/converseGray.png') }}" style="width: 175px; margin-left: 40px; margin-right: 40px;"></img>
      </div>
    </div>
</body>
</html>
