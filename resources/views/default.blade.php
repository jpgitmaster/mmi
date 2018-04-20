<!DOCTYPE html>
<html lang="en" ng-app="MMIapp">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:image" content="{{ URL::asset('public/img/logo.png') }}" />
  
  <link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}">
  <link rel="icon" type="image/x-icon" href="{{ URL::asset('img/logo.png') }}">
  <title>Seafarers - @yield('title')</title>

  @if (isset($stylesheet))
    @foreach($stylesheet as $css)
  <link rel="stylesheet" type="text/css" href="{{ URL::asset($css) }}">
    @endforeach
  @endif
</head>
<body>
<div id="wrapper">
  <div class="hdr">
    <a href="/" class="logo">
      <div class="cmpnylogo">
        <img src="{{ URL::asset('img/logo.png') }}" alt="">
      </div>
    </a>
  </div>
  <div class="content">
    @yield('content')
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