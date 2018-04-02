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
    now: '2018-04-07',
    defaultView: 'timelineDecade',
    header: {
      left: 'prev,next',
      center: 'title',
      // right: 'timelineDay,timelineWeek,timelineMonth,timelineYear,timelineDecade'
      right: ''
    },

    views: {
      timelineDecade: {
        type: 'timeline',
        duration: { years: 3 },
        // buttonText: 'decade'
      }
    },
    height: 600,
    resourceColumns: [
      {
        labelText: 'Vessels',
        field: 'vessels'
      },
      {
        labelText: 'Masters',
        field: 'masters'
      }
    ],
    resourceGroupField: 'group',
    resources: [
      {"id":"a", "group":"test1", "vessels":"Auditorium A","masters":"Master1"},
      {"id":"b", "group":"test1", "vessels":"Auditorium B","masters":"Master1"},
      {"id":"c", "group":"test1", "vessels":"Auditorium C","masters":"Master1"},
      {"id":"d", "group":"test1", "vessels":"Auditorium D","masters":"Master1"},
      {"id":"e", "group":"test1", "vessels":"Auditorium E","masters":"Master1"},
      {"id":"f", "group":"test1", "vessels":"Auditorium F","masters":"Master1"},
      {"id":"g", "group":"test1", "vessels":"Auditorium G","masters":"Master1"},
      {"id":"h", "group":"test2", "vessels":"Auditorium H","masters":"Master1"},
      {"id":"i", "group":"test2", "vessels":"Auditorium I","masters":"Master1"},
      {"id":"j", "group":"test2", "vessels":"Auditorium J","masters":"Master1"},
      {"id":"k", "group":"test2", "vessels":"Auditorium K","masters":"Master1"},
      {"id":"l", "group":"test2", "vessels":"Auditorium L","masters":"Master1"},
      {"id":"m", "group":"test2", "vessels":"Auditorium M","masters":"Master1"},
      {"id":"n", "group":"test2", "vessels":"Auditorium N","masters":"Master1"},
      {"id":"o", "group":"test2", "vessels":"Auditorium O","masters":"Master1"},
      {"id":"p", "group":"test2", "vessels":"Auditorium P","masters":"Master1"},
      {"id":"q", "group":"test2", "vessels":"Auditorium Q","masters":"Master1"},
      {"id":"r", "group":"test3", "vessels":"Auditorium R","masters":"Master1"},
      {"id":"s", "group":"test3", "vessels":"Auditorium S","masters":"Master1"},
      {"id":"t", "group":"test3", "vessels":"Auditorium T","masters":"Master1"}
    ],
    resourceRender: function(resourceObj, $td) {
      $td.eq(1).find('.fc-cell-content')
        .append(
          $('<strong style="cursor: pointer;">(?)</strong>').popover({
            title: resourceObj.title,
            content: 'test!',
            trigger: 'hover',
            placement: 'bottom',
            container: 'body'
          })
        );
    },
    slotLabelFormat: [
      'YYYY',
      'M'
    ],
    events: [
      { id: '1', resourceId: 'a', start: '2018-04-07', end: '2018-08-07', title: 'event 1' },
      { id: '2', resourceId: 'a', start: '2018-08-12', end: '2018-10-07', title: 'event 2' },
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