<!DOCTYPE html>
<html>

<head>
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

            <form id="form" action="{{url('add_aboutme')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <fieldset>
                    <legend>
                        <h1>Add About Yourself</h1>
                    </legend>
                    <div>
                        <label for="my-name">Name</label>
                        <input type="text" name="name" id="my-name" placeholder="Enter your Name" required />
                    </div>
                    <div>
                        <label for="my-title">Title</label>
                        <input type="text" name="title" id="my-title" placeholder="Enter your title" required />
                    </div>
                    <div>
                        <label for="my-phone">Phone</label>
                        <input type="text" name="phone" id="my-phone" placeholder="Enter your phone number" required />
                    </div>
                    <div>
                        <label for="my-email">Email</label>
                        <input type="text" name="email" id="my-email" placeholder="Enter your Email address" required />
                    </div>
                    <div>
                        <label for="my-description">Description</label>
                        <textarea name="description" id="my-description" rows="5" placeholder="Write about yourself" required></textarea>
                    </div>
                    <div>
                        <label for="my-image">Image</label>
                        <input type="file" name="image" id="my-image" accept="image/*" required />
                    </div>
                    <div>
                        <label for="my-linkedin">Linkedin</label>
                        <input type="text" name="linkedin" id="my-linkedin" placeholder="Enter Linkedin account" required />
                    </div>
                    <div>
                        <label for="my-cv">CV</label>
                        <input type="file" name="cv" id="my-cv" accept="application/pdf" required />
                    </div>
                    <button type="submit">Submit</button>
                </fieldset>
            </form>
        </div>
        @include('admin.footer')
    </div>
</body>

</html>