<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Health Awarnes system</title>

  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
  <link rel="stylesheet" href="{{asset('assets/web/css/animate.min.css')}}" />
  {{--
  <link rel="stylesheet" href="{{asset('assets/web/css/font-awesome.css')}}" /> --}}
  <link rel="stylesheet" href="{{asset('assets/web/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('assets/web/css/media.css')}}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css')}}" />
</head>

<body>
  <header>
    @include('web.partials.nav')

    <main>
      <section class="con">
        <h3>Welcome To </h3>
        <h1> <span class="change_content"> </span> <span style="margin-top: -10px;"> | </span> </h1>
        <p>"Best way to khnow"</p>
        <a href="{{route('web.about.index')}}" class="btnone">Contact us</a>
        <a href="{{route('meals')}}" class="btntwo"> See Meals</a>
      </section>
    </main>
  </header>

  <br><br><br><br><br><br><br><br>

  <!--content of home-->
  <section id="counter">
    <div class="wrapper">
      <div class="container">
        <i class="">Cancer</i>
        <span class="num" data-val="350">000</span>
        <span class="text">Estatistcs</span>
      </div>
      <div class="container">
        <i class=""> Corona</i>
        <span class="num" data-val="250">000</span>
        <span class="text">Estatistcs</span>
      </div>
      <div class="container">
        <i class="">Sugary</i>
        <span class="num" data-val="325">000</span>
        <span class="text">Estatistcs</span>
      </div>
      <div class="container">
        <i class="">vaiurs C</i>
        <span class="num" data-val="275">000</span>
        <span class="text">Estatistcs</span>
      </div>
      <div class="container">
        <i class="">Vaiurs B</i>
        <span class="num" data-val="275">000</span>
        <span class="text">Estatistcs</span>
      </div>
    </div>
    <!-- Script -->
  </section>

  <div class="rating-box">
    <h1>How was your experience?</h1>
    <div class="stars">
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
      <i class="fa-solid fa-star"></i>
    </div>
  </div>
  <br><br><br><br><br><br>
  <section class="it">
    <div class="menu">
      <div class="menu__wrapper"><i class="fa-solid fa-plus"></i></div>

      <ul class="menu__items">
        <li class="menu__item">
          <a href="#home"><i class="fa-solid fa-house"></i></a>
        </li>
        <li class="menu__item">
          <a href="#"><i class="fa-solid fa-location-dot"></i></a>
        </li>
        <li class="menu__item">
          <a
            href="https://accounts.google.com/v3/signin/identifier?dsh=S-1291812091%3A1684425320083733&ifkv=Af_xneFe03BPjPYoqDmY44Kv3M6mvHcTHHU4W0gWKBX5-vox43WmFuqAEbaM23q-bXebbOQZF0jA&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><i
              class="fa-solid fa-envelope"></i></a>
        </li>
        <li class="menu__item">
          <a href="https://www.whatsapp.com/?lang=ar"><i class="fa-brands fa-whatsapp"></i></a>
        </li>
      </ul>
    </div>
  </section>

  <div class="container-fluid">
    <h1 class="text-center mt-5 display-3 fw-bold"> ill<span class="theme-text">nesses</span></h1>
    <hr class="mx-auto mb-5 w-25">
    <div class="row mb-5">
      <div class="col-12 col-sm-6 col-md-3 m-auto">
        <!-- card starts here -->
        <div class="card shadow">
          <img src="{{asset('assets/web/img/SERVICE-TESTIMONIAL-hospital-to-home.jpg')}}" alt="" class="card-img-top">
          <div class="card-body">
            <h3 class="text-center"> Several consultation</h3>
            <hr class="mx-auto w-75">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
              nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
            </p>
            <button> <a href="{{route('medicio')}}" class="le">See</a></button>

          </div>
        </div>
        <!-- card ends here -->
      </div>
      <!-- col ends here -->
      <div class="col-12 col-sm-6 col-md-3 m-auto">
        <!-- card starts here -->
        <div class="card shadow">
          <img src="{{asset('assets/web/img/SERVICE-TESTIMONIAL-hospital-to-home.jpg')}}" alt="" class="card-img-top">
          <div class="card-body">
            <h3 class="text-center"> Body consultation</h3>
            <hr class="mx-auto w-75">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
              nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
            </p>
            <button> <a href="{{route('web.medicines.index')}}" class="le">See</a></button>

          </div>
        </div>
        <!-- card ends here -->
      </div>
      <!-- col ends here -->
      <div class="col-12 col-sm-6 col-md-3 m-auto">
        <!-- card starts here -->
        <div class="card shadow">
          <img src="{{asset('assets/web/img/SERVICE-TESTIMONIAL-hospital-to-home.jpg')}}" alt="" class="card-img-top">
          <div class="card-body">
            <h3 class="text-center"> Medical consultation</h3>
            <hr class="mx-auto w-75">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
              nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
            </p>
            <button> <a href="{{route('web.news.index')}}" class="le">See</a></button>

          </div>
        </div>
        <!-- card ends here -->
      </div>
      <!-- col ends here -->
      <div class="col-12 col-sm-6 col-md-3 m-auto">
        <!-- card starts here -->
        <div class="card shadow">
          <img src="{{asset('assets/web/img/SERVICE-TESTIMONIAL-hospital-to-home.jpg')}}" alt="" class="card-img-top">
          <div class="card-body">
            <h3 class="text-center"> Health consultation</h3>
            <hr class="mx-auto w-75">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut eligendi soluta est veniam sequi
              nemo, quas delectus eveniet ducimus rem animi. Natus non earum deleniti aliquam
            </p>
            <button> <a href="{{route('medicio')}}" class="le">See</a></button>

          </div>
        </div>
        <!-- card ends here -->
      </div>
      <!-- col ends here -->
    </div>
  </div>

  <footer class="footer">
    <p class="footer-title">Copyright @ <span>New Cairo Team</span></p>
  </footer>


  <script type="text/javascript" src="{{asset('assets/web/js/jquery.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('assets/web/js/main.js')}}"></script>

</html>