<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.homecss')
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
                                <a class="nav-link" href="{{url('/homeprojectspage')}}">Projects</a>
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
                        <li><a href="{{url('/homeprojectspage')}}">Services</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- header section end -->
    <!-- services section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital">Services </h1>
            <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
            <div class="services_section_2">
                <div class="row">
                    <div class="col-md-4">
                        <div><img src="images/img-1.png" class="services_img"></div>
                        <div class="btn_main"><a href="#">Rafting</a></div>
                    </div>
                    <div class="col-md-4">
                        <div><img src="images/img-2.png" class="services_img"></div>
                        <div class="btn_main active"><a href="#">Hiking</a></div>
                    </div>
                    <div class="col-md-4">
                        <div><img src="images/img-3.png" class="services_img"></div>
                        <div class="btn_main"><a href="#">Camping</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services section end -->
    <!-- footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="input_btn_main">
                <input type="text" class="mail_text" placeholder="Enter your email" name="Enter your email">
                <div class="subscribe_bt"><a href="#">Subscribe</a></div>
            </div>
            <div class="location_main">
                <div class="call_text"><img src="images/call-icon.png"></div>
                <div class="call_text"><a href="#">Call +01 1234567890</a></div>
                <div class="call_text"><img src="images/mail-icon.png"></div>
                <div class="call_text"><a href="#">demo@gmail.com</a></div>
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
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html Templates</a></p>
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