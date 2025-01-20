<div class="about_section layout_padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 padding_right_0 ml-auto">
                <div><img src="/myimages/{{$aboutme->image}}" alt="/myimages/{{$aboutme->image}}" class="about_img"></div>
            </div>
            <div class="col-md-6 pt-5 pr-3">
                <div class="about_taital_main text-center">
                    <p>Bonjour, I am</p>
                    <h1 class="name_taital">{{$aboutme->name}}</h1>
                    <h3 class="title_taital">{{$aboutme->title}}</h3>
                    <a href="/myfiles/{{$aboutme->cv}}" download>
                        <button class="btn btn-secondary cv_button">Download CV</button>
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>