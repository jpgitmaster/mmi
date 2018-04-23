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
      {id: 1, group: 'LPG', vessels: 'BW TOKYO', masters: 'INDIAN OFFICER', eventColor: 'green'},
      {id: 2, group: 'LPG', vessels: 'BW TOKYO', masters: 'INDIAN OFFICER', eventColor: 'orange'},
      {id: 3, group: 'OIL TANKER', vessels: 'CHALLENGE PACIFIC', masters: 'TERANIA< JOUIE J.', eventColor: 'red'},
      {id: 4, group: 'OIL TANKER', vessels: 'EAGLE SAPPORO', masters: 'INDIAN OFFICER'},
      {id: 5, group: 'OIL TANKER', vessels: 'ESTEEM BRILLIANCE', masters: 'INDIAN OFFICER'},
      {id: 6, group: 'OIL TANKER', vessels: 'MAERSK MATSUYAMA', masters: 'GILLE, MARVON E.'},
      {id: 7, group: 'OIL TANKER', vessels: 'MAERSK MISUMI', masters: 'LIZA, RONNIE C.'},
      {id: 8, group: 'OIL TANKER', vessels: 'SINGAPORE VOYAGER', masters: 'INDIAN OFFICER'},
      {id: 9, group: 'OIL TANKER', vessels: 'TAIGA', masters: 'INDIAN OFFICER'},
      {id: 10, group: 'OIL TANKER', vessels: 'TOKIO', masters: 'INDIAN OFFICER'},
      {id: 11, group: 'OIL TANKER', vessels: 'TSUSHIMA', masters: 'INDIAN OFFICER'},
      {id: 12, group: 'PRODUCT TANKER', vessels: 'ESTEEM SPLENDOUR', masters: 'INDIAN OFFICER'},
      {id: 13, group: 'PRODUCT TANKER', vessels: 'ETERNAL DILIGENCE', masters: 'INDIAN OFFICER'},
      {id: 14, group: 'PRODUCT TANKER', vessels: 'CHRISTINA KIRK', masters: 'INDIAN OFFICER'}
    ],
    resourceRender: function(resourceObj, $td) {
      // $td.eq(1).find('.fc-cell-content')
      //   .append(
      //     $('<strong style="cursor: pointer;">(?)</strong>').popover({
      //       title: resourceObj.title,
      //       content: 'test!',
      //       trigger: 'hover',
      //       placement: 'bottom',
      //       container: 'body'
      //     })
      //   );
    },
    slotLabelFormat: [
      'YYYY',
      'M'
    ],
    events: [
      { id: 1, resourceId: 1, start: '2018-04-07', end: '2018-08-07', title: 'event 1' },
      { id: 2, resourceId: 2, start: '2018-08-12', end: '2019-08-07', title: 'event 2' },
      { id: 3, resourceId: 8, start: '2018-08-12', end: '2019-04-07', title: 'event 3' },
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