<!DOCTYPE html>
<html>

<head>
    <base href="/public">
    @include('admin.admincss')

    <style>
        .msg {
            text-align: center;
            font-weight: bold;
        }

        form {
            width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f9f9f9;
            margin: auto;
            margin-top: 100px;
        }

        label {
            font-weight: bold;
        }

        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            box-sizing: border-box;
        }

        textarea {
            resize: vertical;
        }

        button[type="submit"] {
            width: 100%;
            padding: 5px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            border-radius: 3px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: gray;
        }
    </style>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation-->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end-->
        <div class="page-content">
            @if(session()->has('message'))
            <div class="alert alert-success msg">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
            @endif

            <form id="form" action="{{url('update_project', $post->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>
                        <h1>Update Project</h1>
                    </legend>
                    <div>
                        <label for="project-title">Project Title</label>
                        <input type="text" name="title" id="project-title" placeholder="Enter project title" value="{{$post->title}}" required />
                    </div>
                    <div>
                        <label for="project-description">Project Description</label>
                        <textarea name="description" id="project-description" rows="5" placeholder="Enter project description" required>{{$post->description}}</textarea>
                    </div>
                    <div>
                        <label for="project-image">Project Image</label>
                        <input type="file" name="image" id="project-image" accept="image/*" required />
                    </div>
                    <div>
                        <label for="github-link">GitHub Link</label>
                        <input type="text" name="github_link" id="github-link" placeholder="Enter GitHub Link" value="{{$post->github_link}}" required />
                    </div>
                    <div>
                        <label for="live-preview-link">Live Preview Link</label>
                        <input type="text" name="live_preview_link" id="live-preview-link" placeholder="Enter live preview link" value="{{$post->live_preview_link}}" required />
                    </div>
                    <button type="submit">Update</button>
                </fieldset>
            </form>
        </div>
        @include('admin.footer')
    </div>
</body>

</html>