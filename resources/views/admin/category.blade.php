<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font {
            font-size: 40px;
            padding-bottom: 40px;
        }

        .input_text {
            color: black;
        }
        .center{
            margin: auto;
            text-align: center;
            width: 50%;
            margin-top:30px;
            border: 2px solid white;
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
                    <div class="div_center">
                        <h1 class="h2_font"> Add Category</h1>
                        <form action="{{ url('/add_category') }}" method="POST">
                            @csrf
                            <input type="text" name="category" class="input_text" placeholder="new Category">
                            <input type="submit" name="submit" class="btn btn-primary" value="Add Category">
                        </form>
                    </div>
                    <div>
                        <table class="center">
                            <tr>
                                <td>Category Name</td>
                                <td>Action</td>
                            </tr>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{$item->category_name}}</td>
                                    <td><a onclick="return confirm('Are you need delete this category')" class="btn btn-danger" href="{{url('delete_category',$item->id)}}">Delete</a></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
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
