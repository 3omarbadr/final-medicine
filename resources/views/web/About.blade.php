<!DOCTYPE html>
<html lang="en">
<!--divinectorweb.com-->

<head>
    <meta charset="UTF-8">
    <title>About Page</title>
    <link rel="stylesheet" href="{{asset('assets/web/css/swiper-bundle.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/web/css/about.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css')}}" />
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
</head>

<body id="abou">
    @include('web.partials.nav')
    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{session('success')}}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <section class="container">
        <div class="testimonial mySwiper">
            <div class="testi-content swiper-wrapper">
                <div class="slide swiper-slide">
                    <img src="{{asset("assets/dashboard/img/avatar4.png")}}" alt="" class="image" />
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bx bxs-quote-alt-left quote-icon"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <img src="{{asset("assets/dashboard/img/avatar5.png")}}" alt="" class="image" />
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bx bxs-quote-alt-left quote-icon"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
                <div class="slide swiper-slide">
                    <img src="{{asset("assets/dashboard/img/avatar3.png")}}" alt="" class="image" />
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam,
                        saepe provident dolorem a quaerat quo error facere nihil deleniti
                        eligendi ipsum adipisci, fugit, architecto amet asperiores
                        doloremque deserunt eum nemo.
                    </p>
                    <i class="bx bxs-quote-alt-left quote-icon"></i>
                    <div class="details">
                        <span class="name">Marnie Lotter</span>
                        <span class="job">Web Developer</span>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next nav-btn"></div>
            <div class="swiper-button-prev nav-btn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    @include('dashboard.inc.errors')
    <div>
        <h2 class="text-center">Contact Form</h2>
        <form method="POST" action="{{ route('web.form') }}">
            @csrf
            <div class="form-container">
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
            </div>
        </form>
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/web/js/swiper-bundle.min.js')}}"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
                slidesPerView: 1,
                grabCursor: true,
                loop: true,
                pagination: {
                el: ".swiper-pagination",
                clickable: true,
                },
                navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
                },
            });

    </script>

</body>

</html>