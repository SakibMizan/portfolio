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
        input[type="file"],
        input[type="email"],
        input[type="tel"] {
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

            <form id="form" action="{{ url('update_aboutme', $aboutme->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>
                        <h1>Update About Me</h1>
                    </legend>
                    <div>
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" placeholder="Enter your name" value="{{ $aboutme->name }}" required />
                    </div>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter your title" value="{{ $aboutme->title }}" required />
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea name="description" id="description" rows="5" placeholder="Enter a brief description" required>{{ $aboutme->description }}</textarea>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email" value="{{ $aboutme->email }}" required />
                    </div>
                    <div>
                        <label for="phone">Phone</label>
                        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" value="{{ $aboutme->phone }}" required />
                    </div>
                    <div>
                        <label for="image">Profile Image</label>
                        <input type="file" name="image" id="image" accept="image/*" />
                    </div>
                    <div>
                        <label for="linkedin">LinkedIn</label>
                        <input type="text" name="linkedin" id="linkedin" placeholder="Enter your LinkedIn profile link" value="{{ $aboutme->linkedin }}" required />
                    </div>
                    <div>
                        <label for="cv">CV (PDF)</label>
                        <input type="file" name="cv" id="cv" accept="application/pdf" />
                    </div>
                    <button type="submit">Update</button>
                </fieldset>
            </form>
        </div>
        @include('admin.footer')
    </div>
</body>

</html>