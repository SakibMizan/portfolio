<!DOCTYPE html>
<html>

<head>
    @include('admin.admincss')

    <style>
        .msg {
            text-align: center;
            font-weight: bold;
        }

        table {
            table-layout: fixed;
            width: 100%;
            text-align: center;
            align-items: center;
            padding: 15px;
        }

        tr {
            color: white;
        }

        td,
        #del {
            margin: 20px;
            padding: 20px;
            text-align: center;
            align-items: center;
            overflow-wrap: break-word;
        }

        img {
            height: 100px;
            width: 95px;
            padding: 10px;
            text-align: center;
        }

        /*Sweet alert css*/
        .swal-modal {
            text-align: center;
        }

        .swal-footer {
            display: flex;
            justify-content: center;
        }
    </style>

    <!--Sweet Alert js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

            <div class="container mt-5">
                <h1 class="heading fw-bold text-center text-white">All Projects</h1>
                <table class="table table-striped text-center">
                    <thead class="table-warning">
                        <tr class="text-dark text-center">
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>GitHub Link</th>
                            <th>Live Link</th>
                            <th>Status</th>
                            <th>Created</th>
                            <th>Modified</th>
                            <th>Action</th>
                            <th>Update</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($post as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td>{{$post->description}}</td>
                            <td>
                                <img src="projectimage/{{$post->image}}" alt="$post->image">
                            </td>
                            <td>{{$post->github_link}}</td>
                            <td>{{$post->live_preview_link}}</td>
                            <td>{{$post->post_status}}</td>
                            <td>{{$post->created_at}}</td>
                            <td>{{$post->updated_at}}</td>
                            <td><a href="{{url('delete_project', $post->id)}}" class="btn btn-danger" onclick="return confirmation(event)" role="button">Delete</a></td>
                            <td><a href="{{url('edit_project', $post->id)}}" class="btn btn-success">Edit</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        @include('admin.footer')
    </div>

    <!--Sweet Alert js-->
    <script>
        function confirmation(ev) {

            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                    title: "Are you sure to Delete this post",

                    text: "You will not be able to revert this!",

                    icon: "warning",

                    buttons: {
                        confirm: {
                            text: "OK",
                            value: true,
                            visible: true,
                            closeModal: true,
                        },

                        cancel: {
                            text: "Cancel",
                            visible: true,
                            closeModal: true,
                        }
                    },
                    dangerMode: true,
                })

                .then((willCancel) => {
                    if (willCancel) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
    </script>
</body>

</html>