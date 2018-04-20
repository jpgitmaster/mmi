<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="{{ URL::asset('public/img/mmilogo.png') }}" />
  
  <link rel="shortcut icon" href="{{ URL::asset('img/mmilogo.png') }}">
  <link rel="icon" type="image/x-icon" href="{{ URL::asset('img/mmilogo.png') }}">
  <title>MMI - @yield('title')</title>

@if (isset($stylesheet))
  @foreach($stylesheet as $css)
<link rel="stylesheet" type="text/css" href="{{ URL::asset($css) }}">
  @endforeach
@endif
</head>
<body>
<div id="wrapper">
  <div id="header">
    <div class="logo">
      <img src="{{ URL::asset('img/logo.png') }}" alt="">
    </div>
  </div>
  <div class="clearfix"></div>
  <div id="homeslider">
    <div id="menu">
      <ul>
        <li>
          <a href="">Home</a>
        </li>
        <li>
          <a href="">About</a>
        </li>
        <li>
          <a href="">Services</a>
        </li>
        <li>
          <a href="">Contacts</a>
        </li>
      </ul>
    </div>
    <div id="crsl" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#crsl" data-slide-to="0" class="active"></li>
        <li data-target="#crsl" data-slide-to="1"></li>
        <li data-target="#crsl" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="sldr_msg lft">
            <h1>Title 1</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae velit, facilis consectetur placeat corrupti blanditiis mollitia itaque assumenda cum reiciendis exercitationem unde, quaerat harum nesciunt totam quasi. Odio, sequi.
            </p>
          </div>
          <img class="d-block w-100" src="{{ URL::asset('img/slider1.jpg') }}">
        </div>
        <div class="carousel-item">
          <div class="sldr_msg rght">
            <h1>Title 2</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae velit, facilis consectetur placeat corrupti blanditiis mollitia itaque assumenda cum reiciendis exercitationem unde, quaerat harum nesciunt totam quasi. Odio, sequi.
            </p>
          </div>
          <img class="d-block w-100" src="{{ URL::asset('img/slider3.jpg') }}">
        </div>
        <div class="carousel-item">
          <div class="sldr_msg lft">
            <h1>Title 3</h1>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi beatae velit, facilis consectetur placeat corrupti blanditiis mollitia itaque assumenda cum reiciendis exercitationem unde, quaerat harum nesciunt totam quasi. Odio, sequi.
            </p>
          </div>
          <img class="d-block w-100" src="{{ URL::asset('img/slider2.jpg') }}">
        </div>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="footer">
    <div class="row no-gutters">
      <div class="col-lg-4">
        <div class="ftrbx">
          <h3>Multinational Maritime, Inc.</h3>
          <ul>
            <li>
              <i class="fa fa-envelope" style="font-size: 16px;"></i>
              <a href="mailto:support@247globalnursingsolution.com">support@mmimaritime.com</a>
            </li>
            <li>
              <i class="fa fa-phone"></i>
              <span>(212) 244-0247</span>
            </li>
            <li>
              <i class="fa fa-fax" style="font-size: 16px;"></i>
              <span>Fax No: (212) 244-0248</span>
            </li>
            <li>
              <i class="fa fa-map-marker"></i>
              <span>
               Metro Manila
              </span>
            </li>
            <li></li>
          </ul>
          <ul class="sclmedia">
            <li>
              <a href="https://www.facebook.com/247-Global-Nursing-Solution-and-Consulting-Services-LLC-177514276040094/?fref=ts" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com/247GNSCS" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/247gnscs/" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="ftrbx tp">
          <h3>PARTNERS</h3>
          <ul>
            <li>
              <a href="#">Partner1</a>
            </li>
            <li>
              <a href="#">Partner2</a>
            </li>
            <li>
              <a href="#">Partner3</a>
            </li>
            <li>
              <a href="#">Partner4</a>
            </li>
            <li>
              <a href="#">Partner5</a>
            </li>
            <li></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="ftrbx tp">
          <h3>SPONSORS</h3>
          <ul>
            <li>
              <a href="#">Sponsor1</a>
            </li>
            <li>
              <a href="#">Sponsor2</a>
            </li>
            <li>
              <a href="#">Sponsor3</a>
            </li>
            <li>
              <a href="#">Sponsor4</a>
            </li>
            <li>
              <a href="#">Sponsor5</a>
            </li>
            <li></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="ftr">
    <p>Multinational Maritime, Inc. © 2018. All Rights Reserved</p>
  </div>
</div>
  <!-- JS -->
@if (isset($scripts))
  @foreach($scripts as $js)
<script src="{{ URL::asset($js) }}"></script>
  @endforeach
@endif

  <!-- App -->
<!-- @if (isset($ngular))
  @foreach($ngular as $ng)
<script src="{{ URL::asset($ng) }}"></script>
  @endforeach
@endif -->
</body>
</html>