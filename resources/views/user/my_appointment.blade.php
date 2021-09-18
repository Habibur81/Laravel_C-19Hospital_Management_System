<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title> Hospital Management System </title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

    <header>
        <div class="topbar">
        <div class="container">
            <div class="row">
            <div class="col-sm-8 text-sm">
                <div class="site-info">
                <a href="#"><span class="mai-call text-primary"></span> +880 1750 9189 81</a>
                <span class="divider">|</span>
                <a href="#"><span class="mai-mail text-primary"></span> mdhabiburr375@gmail.com </a>
                </div>
            </div>
            <div class="col-sm-4 text-right text-sm">
                <div class="social-mini-button">
                <a href="http://www.facebook.com"><span class="mai-logo-facebook-f"></span></a>
                <a href="#"><span class="mai-logo-twitter"></span></a>
                <a href="#"><span class="mai-logo-dribbble"></span></a>
                <a href="#"><span class="mai-logo-instagram"></span></a>
                </div>
            </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-sm navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}"><span class="text-primary">One</span>-Health</a>

            <form action="#">
            <div class="input-group input-navbar">
                <div class="input-group-prepend">
                <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
            </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="{{url('')}}">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="doctors.html">Doctors</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="blog.html">News</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact</a>
                </li>

                @if(Route::has('login'))

                @Auth

                    <li class="nav-item">
                        <a class="nav-link bg-info text-white" href="{{url('myappointment')}}"> My Appointment </a>
                    </li>

                    <x-app-layout>
                    </x-app-layout>
                @else
                    <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                    </li>
                @endAuth

                @endif

            </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
        </nav>
    </header>

    <section class="MyAppointmentList m-auto" style="padding-top:10vh; width:60%;">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12">
                <table class="table table-striped table-primary text-center">
                    <thead>
                        <tr>
                            <th scope="col">Doctor Name</th>
                            <th scope="col">Date</th>
                            <th scope="col">Message</th>
                            <th scope="col">Status</th>
                            <th scope="col">Cancel Appointment</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach( $appoint as $appoints )
                            <tr>
                                <th>{{$appoints->doctor}}</th>
                                <td>{{$appoints->date}}</td>
                                <td>{{$appoints->message}}</td>
                                <td>{{$appoints->status}}</td>
                                <td><a class="btn btn-danger" onclick="return confirm('Are You Sure Delete Appointment')"  href="{{url('cancle_appoint', $appoints->id)}}"> Cancle</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>
</html>
