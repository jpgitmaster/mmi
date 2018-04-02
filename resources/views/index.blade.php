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
  <div class="hdr">
    <a href="/" class="logo">
      <div class="cmpnylogo">
        <img src="{{ URL::asset('img/mmilogo.png') }}" alt="">
      </div>
    </a>
  </div>
  <div class="content">
    @yield('content')
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

<script>
$(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();

  $('#calendar').fullCalendar({
    schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
    editable: true,
    defaultView: 'timelineDecade',
    header: {
      left: 'prev,next',
      center: 'title',
      right: 'timelineDay,timelineWeek,timelineMonth,timelineYear,timelineDecade'
    },

    views: {
      timelineDecade: {
        type: 'timeline',
        duration: { years: 3 },
        buttonText: 'decade'
      }
    },
    
    height: 400,
    resourceLabelText: 'Vessels',
    resources: [
        {"id":"a","title":"Auditorium A"},
        {"id":"b","title":"Auditorium B"},
        {"id":"c","title":"Auditorium C"},
        {"id":"d","title":"Auditorium D"},
        {"id":"e","title":"Auditorium E"},
        {"id":"f","title":"Auditorium F"},
        {"id":"g","title":"Auditorium G"},
        {"id":"h","title":"Auditorium H"},
        {"id":"i","title":"Auditorium I"},
        {"id":"j","title":"Auditorium J"},
        {"id":"k","title":"Auditorium K"},
        {"id":"l","title":"Auditorium L"},
        {"id":"m","title":"Auditorium M"},
        {"id":"n","title":"Auditorium N"},
        {"id":"o","title":"Auditorium O"},
        {"id":"p","title":"Auditorium P"},
        {"id":"q","title":"Auditorium Q"},
        {"id":"r","title":"Auditorium R"},
        {"id":"s","title":"Auditorium S"},
        {"id":"t","title":"Auditorium T"}
    ],
    events: [
      {title: 'Long Event',start: new Date(2018, 01),end: new Date(2020, 08)}
    ]
  })

})
</script>
  <!-- App -->
<!-- @if (isset($ngular))
  @foreach($ngular as $ng)
<script src="{{ URL::asset($ng) }}"></script>
  @endforeach
@endif -->
</body>
</html>