<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <base href="/public">
     @include('admin.css')

    <style type="text/css">
    .div_center
        {
            text-align: center;
            padding-top: 40px;
        }

        .h2_font
        {
            font-size: 20px;
            color: #6c7293;
        }

        .input_color
        {
            color: black;
            padding-bottom:20px;
        }

        td 
        {
            text-align: center;
            color: #fff;
        }

        .div_design
        {
            padding-bottom: 30px;
        }

        span
        {
            font-size: 17px;
        }

        .height
        {
            padding-top: 20px;
        }

    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
      <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                
                @if (session()->has('message'))

                <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                    
                @endif

                <div class="div_center">
                    <h2 class="h2_font">Add products</h2>

                    <form action="{{url('/edit_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Product Specification</th>
                                    <th>Product Information</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><label for="title">Product Title :</label></td>
                                    <td><input class="input_color" type="text" name="title" value="{{$product->title}}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="description">Product Description :</label></td>
                                    <td><input class="input_color" type="text" name="description" value="{{$product->description}}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="price">Product Price :</label></td>
                                    <td><input class="input_color" type="number" name="price" value="{{$product->price}}" required></td>
                                </tr>
                                <tr>
                                    <td><label for="discount_price">Discount Price :</label></td>
                                    <td><input class="input_color" type="number" name="discount_price" value="{{$product->discount_price}}"></td>
                                </tr>
                                <tr>
                                    <td><label for="quantity">Quantity :</label></td>
                                    <td><input class="input_color" type="number" name="quantity" value="{{$product->quantity}}"></td>
                                </tr>
                                <tr>
                                    <td><label for="category">Product Category :</label></td>
                                    <td>
                                        <select class="input_color" name="category" required>
                                        <option value="{{$product->category}}" selected>{{$product->category}}</option>
                                        @foreach ($category as $category )
                                        <option value="">{{$category->category_name}}</option>
                                        @endforeach 
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="image">Current Product Image :</label></td>
                                    <td> <img class="rounded-0" style="margin:auto; width:120px; height:120px" src="/product/{{$product->image}}" alt=""></td>
                                </tr>
                                <tr>
                                    <td><label for="image">Upload New Image :</label></td>
                                    <td><input style="width:220px" type="file" name="image"></td>
                                </tr>
                            </tbody>
                        </table>
                        <hr style="width: 100%; height:2px; background-color:#6c7293;">
                        <div class="height">
                            <input class="btn btn-primary bg-primary" type="submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
     @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>