<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>About</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Righteous&display=swap" rel="stylesheet">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">

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
                    <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
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
                                <a class="nav-link" href="services.html">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="blog.html">Blog</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="contact.html">Contact</a>
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
                        <li><a href="services.html">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- about section start -->
    <div class="about_section layout_padding">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 padding_right_0 ml-auto">
                    <div><img src="/myimages/{{$aboutme->image}}" alt="/myimages/{{$aboutme->image}}" class="about_img"></div>
                </div>
                <div class="col-md-6 pr-3">
                    <div class="about_taital_main text-center">
                        <h1 class="about_taital">ABOUT ME</h1>
                        <p class="about_text text-justify">{{$aboutme->description}} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about section end -->
    <!--education section start-->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital text-center">EDUCATION</h1>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card h-100 text-center project-card">
                            <img class="card-img-top" id="project-card" src="images/BUP.png" alt="BUP Logo">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">Bachelor of Science</h3>
                                <p class="card-text">Bangladesh University of Professionals<br>2020-Present</p>
                                <a href="https://bup.edu.bd/" target="_blank">
                                    <button class="btn btn-success">Visit BUP</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card h-100 text-center project-card">
                            <img class="card-img-top" id="project-card" src="images/BAFSD.png" alt="BAFSD Logo">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">Higher Secondary School Certificate</h3>
                                <p class="card-text">BAF Shaheen College Dhaka<br>2018-2020</p>
                                <a href="https://www.bafsd.edu.bd/" target="_blank">
                                    <button class="btn btn-success">Visit BAFSD</button>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                        <div class="card h-100 text-center project-card">
                            <img class="card-img-top" id="project-card" src="images/BAFSD.png" alt="BAFSD Logo">
                            <div class="card-body d-flex flex-column">
                                <h3 class="card-title">Secondary School Certificate</h3>
                                <p class="card-text">BAF Shaheen College Dhaka<br>2016-2018</p>
                                <a href="https://www.bafsd.edu.bd/" target="_blank">
                                    <button class="btn btn-success">Visit BAFSD</button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--education section end-->
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
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="location_main">
                <div class="call_text"><img src="images/call-icon.png"></div>
                <div class="call_text"><a href="tel:{{$aboutme->phone}}">{{$aboutme->phone}}</a></div>
                <div class="call_text"><img src="images/mail-icon.png"></div>
                <div class="call_text"><a href="mailto:demo@gmail.com">{{$aboutme->email}}</a></div>
            </div>
            <div class="social_icon">
                <ul>
                    <li><a href="#"><img src="images/fb-icon.png"></a></li>
                    <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                    <li><a href="#"><img src="images/linkedin-icon.png"></a></li>
                    <li><a href="#"><img src="images/instagram-icon.png"></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- footer section end -->
    <!-- copyright section start -->
    <div class="copyright_section">
        <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Sakib Mizan</a></p>
        </div>
    </div>
    <!-- copyright section end -->
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