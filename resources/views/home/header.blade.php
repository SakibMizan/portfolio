<div class="header_main">
    <!-- Mobile menu -->
    <div class="mobile_menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo_mobile">
                <a href="{{ url('/') }}">
                    <img src="images/logo.png" alt="Logo">
                </a>
            </div>
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
                        <a class="nav-link" href="{{url('/homeexperiencepage')}}">Experience</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/homecontactpage')}}">Contact Me</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

    <!-- Desktop menu -->
    <div class="container-fluid">
        <div class="logo">
            <a href="{{ url('/') }}">
                <img src="images/logo.png" alt="Logo">
            </a>
        </div>

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