<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center {
            margin: auto;
            text-align: center;
        }

        .center {
            margin: auto;
            text-align: center;
            width: 100%;
            margin-top: 30px;
            border: 1px solid white;
        }
    </style>
</head>

<body>
    <div class="container-scroller">

        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            @include('admin.navbar')
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    @if (session()->has('message'))
                        <div class="alert alert-success alert-dismissible fade show">
                            {{ session()->get('message') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">X</button>
                        </div>
                    @endif
                    <table class="center">
                        <tr>
                            <td>Title</td>
                            <td>description</td>
                            <td>quantity</td>
                            <td>price</td>
                            <td>discount_price</td>
                            <td>category</td>
                            <td>image</td>
                        </tr>
                        @foreach($data as $data)
                            <tr>
                                <td>{{$data->title}}</td>
                                <td>{{$data->description}}</td>
                                <td>{{$data->quantity}}</td>
                                <td>{{$data->price}}</td>
                                <td>{{$data->discount_price}}</td>
                                <td>{{$data->category}}</td>
                                <td>
                                    <img src="/product/{{$data->image}}">
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            @include('admin.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.js')
</body>

</html>
