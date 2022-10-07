<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section starts -->
          @include('home.header')
        <!-- header section ends -->

        <div class="container" style="padding:30px;">
            <div class="row flex-center">
              <div class="col-md-6 order-1 order-md-0">
                <img src="/product/{{$product->image}}" class="rounded" style="width:300px; height:350px;">
             </div>
              <div class="col-md-6 gx-xl-9">
                <h1 class="my-4" style="font-size: 20px;"><b>{{$product->title}}</b></h1>
                <p class="fs-2"><b>Descrition:</b><br> {{$product->description}}</p>
                <h6 class="my-4">Available in stock: {{$product->quantity}}</h6>
                <h2 class="fs-lg-6 my-4">
                    @if ($product->discount_price != null)
                        
                                <h6 style="color: rgb(90, 202, 90); padding-bottom: 10px;" >
                                <label for=""> Discount price :</label> ${{$product->discount_price}} <br>
                                    <span style="color:red;  text-decoration: line-through;">
                                    <label for="">Price :</label> ${{$product->price}}
                                    </span>
                                </h6>
                                @else
                
                                <h6 style="color: rgb(90, 202, 90);">
                                    ${{$product->price}} <br>
                                    <span><hr style="height:20px;"></span>
                                </h6>
                                @endif
                </h2>
                
                <a class="btn btn-primary" style="margin-top: 10px;" href="#!">Add to cart</a>
              </div>
            </div>
          </div>
      </div>
    </div>
      <!-- footer start -->
        @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>