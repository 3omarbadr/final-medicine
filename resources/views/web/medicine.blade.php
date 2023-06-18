<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('assets/web/css/medicine.css')}}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/web/css/bootstrap.min.css')}}" />
    <title>Medicine page</title>
</head>

<body>

    @include('web.partials.nav')
    <section class="main">
        <div>
            <h2><br><span>We're Always <br>
                    Ready To Help</span></h2>
            <h3>The Clinic provides diagnosis and management of pain in the head, face, mouth and teeth</h3>

        </div>
    </section>

    <section>
        <h2 class="title">Services</h2>
        <div class="row align-items-stretch">
            @foreach ($medicines as $medicine )
            <div class="col-sm-12 col-md-6 col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="icon">
                        <img src="{{ Illuminate\Support\Str::startsWith($medicine->img, 'medicineServices') ? url("storage/$medicine->img") : $medicine->img }}"
                        alt="medicines" style="max-height: 150px; object-fit: cover;">
                    </div>
                    <div class="info">
                        <h3>{{$medicine->name}}</h3>
                        <p>{{$medicine->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>


    <section class="section">
        <h3>Working Process</h3>
        <h1>How We Work?</h1>
        <p>
            "Emergency room services , Short-term hospitalization , X-ray/ radiology services , General and specialty
            surgical services"</p>
        <div class="content2">
            <div class="card2">
                <div class="icon">
                    <img src="{{asset('assets/web/images/doctor-appointment.jpg')}}" alt="">
                </div>
                <div class="info2">
                    <h3>Appointment</h3>
                    <p>a formal arrangement to meet or visit someone</p>
                </div>
            </div>
            <div class="card2">
                <div class="icon">
                    <img src="{{asset('assets/web/images/pathoolgy.jpg')}}" alt="">
                </div>
                <div class="info2">
                    <h3>Expert Doctor</h3>
                    <p>is a leading home medical services provider </p>
                </div>
            </div>
            <div class="card2">
                <div class="icon">
                    <img src="{{asset('assets/web/images/SERVICE-TESTIMONIAL-hospital-to-home.jpg')}}" alt="">
                </div>
                <div class="info2">
                    <h3>Consultation</h3>
                    <p>he process of discussing something with someone</p>
                </div>
            </div>
            <div class="card2">
                <div class="icon">
                    <img src="{{asset('assets/web/images/caregiver-assisting-senior-man-out-of-bed.jpg')}}" alt="">
                </div>
                <div class="info2">
                    <h3>Enjoy Life</h3>
                    <p>life is full of surprises</p>
                </div>
            </div>
        </div>

    </section>
    <footer class="footer">
        <p class="footer-title">Copyright @ <span>New Cairo Team</span></p>
    </footer>
</body>
<script type="text/javascript" src="{{asset('assets/web/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/web/js/bootstrap.min.js')}}"></script>

</html>