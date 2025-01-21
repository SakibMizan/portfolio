<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.homecss')
    <style>
        .about_img {
            width: 600px;
            height: 600px;
            object-fit: contain;
            background-color: bisque;
            display: block;
            border-radius: 8px;
            margin: 0 auto;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
        }

        .card-img-top {
            width: 100%;
            height: 250px;
            object-fit: contain;
        }

        .project-card {
            border: 2px solid grey;
            border-radius: 8px;
        }

        .project-card:hover {
            transform: scale(1.05);
            background-color: rgb(0, 30, 67);
            color: white;
            border: 2px solid bisque;
        }

        .project-card:hover .card-title {
            color: white;
        }

        .card-body {
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 100%;
            text-align: center;
        }

        .card-title,
        .card-text {
            margin: 0;
            padding: 0;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 1rem;
            margin-bottom: 20px;
        }

        .btn {
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <!-- header section start -->
    <div class="header_section">
        <div class="header_main">
            <div class="mobile_menu">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <div class="logo_mobile"><a href="{{url('/')}}"><img src="images/logo.png"></a></div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/')}}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/homeaboutpage')}}">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/homeprojectspage')}}">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('/homeexperiencepage')}}">Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{url('/homecontactpage')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="container-fluid">
                <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
                <div class="menu_main">
                    <ul>
                        <li class="active"><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('/homeaboutpage')}}">About</a></li>
                        <li><a href="{{url('/homeprojectspage')}}">Projects</a></li>
                        <li><a href="{{url('/homeexperiencepage')}}">Experience</a></li>
                        <li><a href="{{url('/homecontactpage')}}">Contact Me</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->

    <!--experience section start-->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital text-center">EXPERIENCE</h1>
            <div class="services_section_2">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card h-100 text-center project-card">
                            <img class="card-img-top" id="project-card" src="images/skoder.png" alt="BUP Logo">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">Intern Web Developer</h3>
                                <p class="card-text">Skoder Technologies<br>Dec'24-Feb'25</p>
                                <a href="https://www.skoder.co/" target="_blank">
                                    <button class="btn btn-danger">Visit Skoder</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--experience section end-->
    <!-- footer & copyright section start -->
    @include('home.footer')
    <!-- footer & copyright section end -->

    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>

</html>