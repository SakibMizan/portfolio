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