<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.homecss')
</head>

<body>
    <!-- header section start -->
    <div class="header_section" id="home">
        @include('home.header')
        <!-- banner section start -->
        @include('home.banner')
        <!-- banner section end -->
    </div>
    <!-- header section end -->

    <!-- about section start -->
    <div id="about">
        @include('home.about')
    </div>
    <!-- about section end -->

    <!-- projects section start -->
    <div id="projects">
        @include('home.services')
    </div>
    <!-- projects section end -->

    <!-- blog section start -->
    <!-- blog section end -->

    <!-- client section start -->
    <!-- client section start -->

    <!-- choose section start -->
    <!-- choose section end -->

    <!-- footer & copyright section start -->
    <div id="footer">
        @include('home.footer')
    </div>
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