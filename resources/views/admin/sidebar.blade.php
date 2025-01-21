<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
        <div class="avatar"><img src="adminpanel/img/2023.1-modified.png" alt="..." class="img-fluid rounded-circle"></div>
        <div class="title">
            <h1 class="h5">Sakib Mizan</h1>
            <p>Web Developer</p>
        </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
        <li><a href="{{ url('|')}}"> <i class="icon-home"></i>Home </a></li>
        <li><a href="{{url('post_project')}}"> <i class="icon-grid"></i>Add Projects</a></li>
        <li><a href="{{url('show_project')}}"> <i class="fa fa-bar-chart"></i>Show Projects</a></li>
        <li><a href="{{url('post_aboutme')}}"> <i class="icon-padnote"></i>Add About Me</a></li>
        <li><a href="{{url('show_aboutme')}}"> <i class="icon-padnote"></i>Show About Me</a></li>
        <li><a href="{{ url('/') }}"> <i class="icon-logout"></i>Portfolio Home Page</a></li>
</nav>