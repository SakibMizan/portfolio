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
            margin: 18px;
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

        /* Ensure links wrap and don't overflow */
        td a {
            display: block;
            overflow-wrap: break-word;
            white-space: normal;
        }

        /* Set column widths to prevent content overflow */
        .name-column,
        .title-column,
        .description-column,
        .email-column,
        .phone-column,
        .image-column,
        .linkedin-column,
        .cv-column {
            width: 10%;
            /* Adjust according to your needs */
        }

        .action-column,
        .update-column {
            width: 8%;
            /* Adjust to fit buttons */
        }

        /* Sweet Alert CSS */
        .swal-modal {
            text-align: center;
        }

        .swal-footer {
            display: flex;
            justify-content: center;
        }

        /* Responsive Table Wrapper */
        .table-wrapper {
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
            margin-bottom: 20px;
        }
    </style>

    <!-- Sweet Alert JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
        <!-- Sidebar Navigation -->
        @include('admin.sidebar')
        <!-- Sidebar Navigation end -->
        <div class="page-content">
            @if(session()->has('message'))
            <div class="alert alert-success msg">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                {{ session()->get('message') }}
            </div>
            @endif

            <div class="container mt-5">
                <h1 class="heading fw-bold text-center text-white">About Me Details</h1>

                <!-- Wrap the table for responsiveness -->
                <div class="table-wrapper">
                    <table class="table table-striped text-center">
                        <thead class="table-warning">
                            <tr class="text-dark text-center">
                                <th class="name-column">Name</th>
                                <th class="title-column">Title</th>
                                <th class="description-column">Description</th>
                                <th class="email-column">Email</th>
                                <th class="phone-column">Phone</th>
                                <th class="image-column">Image</th>
                                <th class="linkedin-column">LinkedIn</th>
                                <th class="cv-column">CV</th>
                                <th class="action-column">Action</th>
                                <th class="update-column">Update</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($aboutme as $aboutme)
                            <tr>
                                <td>{{ $aboutme->name }}</td>
                                <td>{{ $aboutme->title }}</td>
                                <td>{{ $aboutme->description }}</td>
                                <td>{{ $aboutme->email }}</td>
                                <td>{{ $aboutme->phone }}</td>
                                <td>
                                    <img src="myimages/{{ $aboutme->image }}" alt="{{ $aboutme->image }}">
                                </td>
                                <td>
                                    <a href="{{ $aboutme->linkedin }}" target="_blank" id="del">{{ $aboutme->linkedin }}</a>
                                </td>
                                <td>
                                    <a href="myfiles/{{ $aboutme->cv }}" id="del" download>{{ $aboutme->cv }}</a>
                                </td>
                                <td>
                                    <a href="{{ url('delete_aboutme', $aboutme->id) }}" class="btn btn-danger" onclick="return confirmation(event)" role="button">Delete</a>
                                </td>
                                <td>
                                    <a href="{{ url('edit_aboutme', $aboutme->id) }}" class="btn btn-success">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @include('admin.footer')
    </div>

    <!-- Sweet Alert JS -->
    <script>
        function confirmation(ev) {
            ev.preventDefault();

            var urlToRedirect = ev.currentTarget.getAttribute('href');

            console.log(urlToRedirect);

            swal({
                    title: "Are you sure to delete this entry?",
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
                .then((willDelete) => {
                    if (willDelete) {
                        window.location.href = urlToRedirect;
                    }
                });
        }
    </script>
</body>

</html>