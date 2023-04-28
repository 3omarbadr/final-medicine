<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{asset('assets/web/css/news.css')}}" />
  <link type="text/css" rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css')}}" />
  <title>News Page</title>
</head>

<body>
  @include('web.partials.nav')
  <div class="container">
    <div class="row justify-content-center">
      @foreach ($news as $article)
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="{{ Illuminate\Support\Str::startsWith($article->img, 'news') ? url("storage/$article->img") : $article->img }}"
          alt="news" style="max-height: 150px; object-fit: cover;">
          <div class="card-body">
            <h2 class="card-title">{{ $article->title }}</h2>
            <h3 class="card-subtitle text-muted">{{ $article->subtitle }}</h3>
            <p class="card-text">{{ $article->description }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>

  <footer class="footer fixed-bottom">
    <p class="footer-title">Copyright @ <span>New Cairo Team</span></p>
  </footer>
</body>
<script type="text/javascript" src="{{asset('assets/web/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>

</html>