<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Awarnes system</title>
  <link rel="stylesheet" href="{{asset('assets/web/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/web/css/media.css')}}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css')}}" />
</head>

<body>
  <div class="home">
    @include('web.partials.nav')

  <!--content of home-->

  <!---->
  <div class="cont">
    <h1> Health Awarnes</h1>
    <p>We Care About Your Health</p>
    <form action="{{route('web.news.index')}}" method="GET">
      <button type="submit" class="btn1"> See more</button>
    </form>
    <form action="{{route('web.about.index')}}" method="GET">
      <button type="submit" class="btn1"><span></span>Contact</button>
    </form>
    

  </div>
  </div>
  <div class="wrapper">
    <div class="content">

      <p class="text">Cancer</p>
      <p class="nm" data-val="2000">000</p>
    </div>

    <div class="content">

      <p class="text">Cancer</p>
      <p class="nm" data-val="540">000</p>

    </div>

    <div class="content">

      <p class="text">Corona</p>

      <p class="nm" data-val="525">0000</p>
    </div>

    <div class="content">
      <p class="text"> Sugary</p>

      <p class="nm" data-val="480">000</p>
    </div>
  </div>

  <div class="dee">
    <h2>illnesses</h2>
    <div class="coo">
      <div class="dee-item">
        <h3>Cancer</h3>
        <img src="{{asset('assets/web/img/SERVICE-TESTIMONIAL-hospital-to-home.jpg')}}" alt="">

        <p class="mo"> Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
        <button style="color: #fff;">Read More</button>


      </div>


      <div class="dee">


        <div class="dee-item">
          <h3>Corona</h3>
          <img src="{{asset('assets/web/img/SERVICE-TESTIMONIAL-hospital-to-home.jpg')}}" alt="">

          <p class="mo">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          <button style="color: #fff;">Read More</button>


        </div>
      </div>

      <div class="dee">


        <div class="dee-item">
          <h3>Sugary</h3>
          <img src="{{asset('assets/web/img/SERVICE-TESTIMONIAL-hospital-to-home.jpg')}}" alt="">

          <p class="mo">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          <button style="color: #fff;">Read More</button>


        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <footer>
    <h3>coopy right <a href="#">@ New cairo Academy</a></h3>
  </footer>

  <script type="text/javascript" src="{{asset('assets/web/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/web/js/main.js')}}"></script>

</html>