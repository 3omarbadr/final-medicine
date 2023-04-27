<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <title>About Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="{{asset('assets/web/css/style.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css')}}" />
</head>

<body id="abou">
    @include('web.partials.nav')
    <div class="carousel">
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{asset('assets/web/img/about-us.jpeg')}}">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est,
                    alias recusandae."</p>
                <h4>Ahmed Gamal</h4>
                <h5>Engineer</h5>
            </div>
        </a>
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{asset('assets/web/img/about-us.jpeg')}}">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est,
                    alias recusandae."</p>
                <h4>Ahmed Gamal</h4>
                <h5>Engineer</h5>
            </div>
        </a>
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{asset('assets/web/img/about-us.jpeg')}}">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est,
                    alias recusandae."</p>
                <h4>Ahmed Gamal</h4>
                <h5>Engineer</h5>
            </div>
        </a>
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{asset('assets/web/img/about-us.jpeg')}}">
                </div>
                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus veritatis repellendus delectus, est,
                    alias recusandae."</p>
                <h4>Ahmed Gamal</h4>
                <h5>Engineer</h5>
            </div>
        </a>
        <a class="carousel-item" href="#">
            <div class="testi">
                <div class="img-area">
                    <img src="{{asset('assets/web/img/about-us.jpeg')}}">
                </div>
                <p>"mostafa</p>
                <h4>Ahmed Gamal</h4>
                <h5>Engineer</h5>
            </div>
        </a>

    </div>

    <div class="d-flex justify-content-center">
        <div class="col-md-6">
            <form method="POST" action="{{ route('web.form') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="form-group">
                    <label for="position">Position:</label>
                    <input type="text" name="position" id="position">
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" id="message" required></textarea>
                </div>
                <button class="btn btn-primary mb-2" type="submit">Submit</button>
            </form>
        </div>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        $(document).ready(function(){
    $('.carousel').carousel({
			padding: 200
	});
	autoplay();
	function autoplay() {
		$('.carousel').carousel('next');
		setTimeout(autoplay, 4500);
	}
  });
    </script>

</body>

</html>