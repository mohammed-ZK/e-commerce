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

        .div_dis {
            margin-bottom: 10px
        }

        .h2_font {

            font-size: 40px;
        }

        .text_color {
            color: black;
            margin: auto;
        }

        label {
            display: inline-block;
            width: 200px;
        }

        .center {
            margin: auto;
            text-align: center;
            width: 50%;
            margin-top: 30px;
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
                    <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="div_center">
                            <h1 class="h2_font"> Add Product</h1>
                            <div class="div_dis">
                                <label>Title </label>
                                <input class="text_color" type="text" name="title" required>
                            </div>
                            <div class="div_dis">
                                <label>description </label>
                                <input class="text_color" type="text" name="description" required>
                            </div>
                            <div class="div_dis">
                                <label>quantity </label>
                                <input class="text_color" type="number" min="0" name="quantity" required>
                            </div>
                            <div class="div_dis">
                                <label>price </label>
                                <input class="text_color" type="text" name="price" required>
                            </div>
                            <div class="div_dis">
                                <label>discount_price </label>
                                <input class="text_color" type="text" name="discount_price" required>
                            </div>
                            <div class="div_dis">
                                <label>category </label>
                                <select class="text_color" name="category" required>
                                    @foreach ($data as $item)
                                        <option value="{{$item->category_name}}">
                                            {{$item->category_name}}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="div_dis">
                                <label>image </label>
                                <input type="file" name="image" required>
                            </div>
                            <div class="div_dis">
                                <input type="submit" value="add product" class="btn btn-success" required>
                            </div>
                        </div>
                    </form>
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
