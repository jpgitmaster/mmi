<!DOCTYPE html>
<html lang="en" ng-app="admnApp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  <meta property="og:image" content="{{ URL::asset('public/img/mmilogo.png') }}" />
  
  <link rel="shortcut icon" href="{{ URL::asset('img/mmilogo.png') }}">

@if (isset($stylesheet))
  @foreach($stylesheet as $css)
<link rel="stylesheet" type="text/css" href="{{ URL::asset($css) }}">
  @endforeach
@endif
</head>
<body>
<div id="wrapper" ng-controller="ctrlApp">
  <div class="admnbx logo">
    <a href="/" class="cmpnylogo">
      <img src="{{ URL::asset('img/logo.png') }}" alt="">
    </a>
  </div>
  <div class="admnbx search">
    
  </div>
  <div class="admnbx picture">
    {{ Auth::user()->email }}
    <div class="dp">
      <div data-toggle="dropdown">
        <i class="fa fa-user-circle-o"></i>
      </div>
      <div class="dropdown-menu">
        <div class="arrow"></div>
        <div class="popover-body">
          <a href="{{route('admn_logout')}}">
            LOGOUT
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="admnbx navi">
    <ul>
      <li></li>
      <li>
        <a href="{{route('admn_dashboard')}}">
          <span class="lbl">Dashboard</span>
          <span class="icn"><i class="fa fa-desktop"></i></span>
        </a>
      </li>
      <li>
        <a href="{{route('admn_images')}}">
          <span class="lbl">Images</span>
          <span class="icn"><i class="fa fa-image"></i></span>
        </a>
      </li>
      <!-- <li>
        <a href="">
          <span class="lbl">Users</span>
          <span class="icn"><i class="fa fa-users"></i></span>
        </a>
      </li>
      <li>
        <a href="">
          <span class="lbl">Jobs</span>
          <span class="icn"><i class="fa fa-briefcase"></i></span>
        </a> -->
      </li>
      <li></li>
    </ul>
  </div>
  <div class="admnbx content" ng-app="usrContent">
    @yield('admin_content')
  </div>
</div>

  <!-- JS -->
@if (isset($scripts))
  @foreach($scripts as $js)
<script src="{{ URL::asset($js) }}"></script>
  @endforeach
@endif


  <!-- App -->
@if (isset($ngular))
  @foreach($ngular as $ng)
<script src="{{ URL::asset($ng) }}"></script>
  @endforeach
@endif
</body>
</html>