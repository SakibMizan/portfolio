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
                                <a class="nav-link " href="blog.html">Blog</a>
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
    <!-- projects section start -->
    <div class="services_section layout_padding">
        <div class="container">
            <h1 class="services_taital text-center">PROJECTS</h1>
            <p class="services_text text-center">Feel free to surf through my arts</p>
            <div class="services_section_2">
                <div class="row">
                    @foreach($post as $post)
                    <div class="col-lg-6 col-md-6 col-sm-12 mb-4">
                        <div class="card h-100 text-center project-card">
                            <img class="card-img-top" id="project-card" src="/projectimage/{{$post->image}}" alt="/projectimage/{{$post->image}}">
                            <div class="card-body d-flex flex-column">
                                <h4 class="card-title">{{$post->title}}</h4>
                                <p class="card-text">{{$post->description}}</p>
                                <div class="d-flex justify-content-between mt-auto">
                                    <!-- GitHub Link Button -->
                                    <button type="button" class="btn btn-primary mr-2" onclick="window.open('{{$post->github_link}}', '_blank');" title="Learn More">GitHub</button>
                                    <!-- Live Preview Link Button -->
                                    <button type="button" class="btn btn-primary" onclick="window.open('{{$post->live_preview_link}}', '_blank');" title="Learn More">Go Live</button>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- projects section end -->
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