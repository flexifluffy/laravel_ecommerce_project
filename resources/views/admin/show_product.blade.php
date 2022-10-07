<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
     @include('admin.css')

     <style type="text/css">
        .center
        {
            margin: auto;
            text-align: center;
            margin-top: 30px;
            border: 1px solid #ababab;
            color: #fff;
        }
        .h2_font{
            text-align: center;
            font-size: 20px;
            margin-top:40px;
            color: #6c7293;
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


                @if(session()->has('message'))
                <div class="alert alert-primary">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    {{session()->get('message')}}
                </div>
                @endif

                
                <h2 class="h2_font">All Products</h2>
                <table class="center table table-striped">
                    <thead>
                        <tr>
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Discount Price</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $product )
                        <tr>
                            <td>{{$product->title}}</td>
                            <td>{{$product->description}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->category}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->discount_price}}</td>
                            <td>
                                <img class="rounded-0" src="/product/{{$product->image}}" style="width:70px; height:70px; margin: auto;">
                            </td>
                            <td><a class="btn btn-success" href="{{url('/edit_product', $product->id )}}">Edit</a></td>
                            <td><a onclick="return confirm('Are you sure that you want to delete this product?')" class="btn btn-danger" href="{{url('/delete_product', $product->id )}}">Delete</a></td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>





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