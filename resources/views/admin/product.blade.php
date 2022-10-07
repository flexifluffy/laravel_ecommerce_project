<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
            padding-bottom: 40px;
            color: #6c7293;
        }

        .input_color
        {
            color: black;
            padding-bottom:20px;
        }

        label
        {
            display: inline-block;
            width: 200px;
            text-align: left;
        }
        .div_design
        {
            padding-bottom: 30px;
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
                    <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="div_design">
                        <label for="title">Product Title :</label>
                        <input class="input_color" type="text" name="title" placeholder="Write a title" required>
                    </div>

                    <div class="div_design">
                        <label for="description">Product Description :</label>
                        <input class="input_color" type="text" name="description" placeholder="Write a description" required>
                    </div>

                    <div class="div_design">
                        <label for="price">Product Price :</label>
                        <input class="input_color" type="number" name="price" placeholder="Write a price" required>
                    </div>

                    <div class="div_design">
                        <label for="discount_price">Discount Price :</label>
                        <input class="input_color" type="number" name="discount_price" placeholder="Write a discount price">
                    </div>

                    <div class="div_design">
                        <label for="quantity">Quantity :</label>
                        <input class="input_color" type="number" name="quantity" placeholder="Write a quantity">
                    </div>

                    <div class="div_design">
                        <label for="category">Product Category :</label>
                        <select class="input_color" name="category" required>
                            <option value="" selected>Choose a category here</option>
                            @foreach ($category as $category )
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                            @endforeach
                            
                        </select>
                    </div>

                    <div class="div_design">
                        <label for="image">Upload Product Images :</label>
                        <input style="width:220px" type="file" name="image" required>
                    </div>

                    <div class="div_design">
                        <input class="btn btn-primary" type="submit" value="Submit">
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