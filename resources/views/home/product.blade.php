<section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our products
               </h2>
            </div>
            <div class="row">
               @foreach ($products as $product)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details', $product->id)}}" class="option1">
                           Product details
                           </a>
                           <form action="{{url('add_cart', $product->id)}}" method="POST">
                              @csrf
                              <input class="btn btn-outline-dark" style="border-radius:30px; margin-bottom: 10px;" type="submit" value="Add to card">
                              <div style="width: 180px; overflow: hidden; margin: auto;">
                              <span style ="padding-right: 10px; color:red;" for="quantity"><b>How many?</b></span><input style="width: 60px; border-radius: 30px; align-content: right; text-align:start;" type="number" value="1" name="quantity" min="1">
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="/product/{{$product->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$product->title}}
                        </h5>

                        @if ($product->discount_price != null)
                        
                        <h6 style="color: rgb(90, 202, 90);" >
                           ${{$product->discount_price}} <br>
                           <span style="color:red;  text-decoration: line-through;">
                           ${{$product->price}}
                           </span>
                        </h6>
                        @else

                        <h6 style="color: rgb(90, 202, 90);">
                           ${{$product->price}} <br>
                           <span><hr style="height:20px;"></span>
                        </h6>
                        @endif                        
                     </div>
                  </div>
               </div>
                  
               @endforeach
               <div class=".pagination-font-color" style="margin:auto; padding-top:30px">
               {!!$products->withQueryString()->links('pagination::simple-bootstrap-5')!!}
               </div>
            </div>
         </div>
      </section>