<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
            color: #6c7293 !important;
        }

        .input_color 
        {
            color:black;
        }
        .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 1px solid #ababab;
        }
        th, td
        {
            padding-left: 10px;
        }

    </style>

     @include('admin.css')
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
                <!-- session message start -->
                @if(session()->has('message'))
                
                    <div class="alert alert-primary">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>

                        {{session()->get('message')}}

                    </div>

                @endif
                <!-- session message end -->

                <!-- Add data panel start  -->
                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>
                    <form action="{{url('/add_category')}}" method="POST">
                        @csrf
                        <input class="input_color" type="text" name="category" placeholder="Write category name" >
                        <input class="btn btn-primary" type="submit" name="Submit" value="Add Category">
                    </form>
                </div>
                <!-- Add data panel end -->

                <!-- show/delete data panel start -->
                <table class="center table table-striped text-white">
                    <thead>
                        <tr>
                            <th>Category Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data )
                        <tr>
                            <td>{{$data->category_name}}</td>
                            <td><a onclick="return confirm('Are you sure that you want to delete this category?')" class="btn btn-danger" href="{{url('delete_category', $data->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


                <!-- show/delete data panel start -->
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