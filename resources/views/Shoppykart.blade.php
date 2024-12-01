@extends("layshop.layout")

@section('content')
<div id="carouselExampleCaptions" class="carousel slide full-height-carousel" data-bs-ride="carousel">
  <div class="carousel-inner pb-5">
    @foreach ($carousel as $item)
    <div class="carousel-item {{ $loop->first ? 'active' : '' }}" data-bs-interval="8000">
      <img src="{{ asset('images/' . $item->image) }}" class="d-block w-100" alt="...">
      <div class="carousel-caption">
      <div class="ab my-4">
        <span class="fs-4 text-danger fw-semibold">{{ $item->sale }}</span>
        <p class="k fw-bolder">{{ $item->heading }}</p>
        <p class="fs-5 fw-medium">{{ $item->description }}</p>
        <a target="_blank" style="text-decoration: none;" href="product.html">
        <button class="btn mx-auto pt-3 px-lg-5 btn-style px-md-4 px-sm-3 d-flex text-white mt-4"
          style="background-color: rgb(239, 35, 60);">
          <p>Start Shopping</p>
          <i class="fa-solid fa-arrow-right pt-2 ps-2"></i>
        </button>
        </a>
      </div>
      </div>
    </div>
  @endforeach
  </div>

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="d-flex bg-tertiary">
  <p class="fs-3 fw-semibold mx-auto bg-tertiary"
    style="border: 1px solid rgb(247 246 246); background-color: rgb(247 246 246); width: 100%; text-align: center; padding-top: 30px; padding-bottom: 60px;">
    Free Shipping For You Till Midnight <i class="fa-solid fa-truck-fast ps-2 mt-4"></i>
  </p>
</div>

<div class="d-flex hh mx-3 mt-4">
  <div class="container-fluid">
    <div class="row">
      @foreach ($card as $cardItem)
      <div class="col-lg-6 col-md-6 col-sm-12">
      <div class="mb-2">
        <div class="a4 py-5 px-1 text-white"
        style="border-radius: 5px; background-image: url('{{ asset('images/' . $cardItem->image) }}');">
        <p class="card-title nn fw-bolder ms-5 pb-3">{{ $cardItem->description }}</p>
        <a href="product.html" class="link-light link-underline-danger">
          <div class="lk">
          <button class="jl text-white ms-5 btn mt-3 bt-style" style="transition: 0.5s;">
            <div class="d-flex" style="position: relative; top: 6px;">
            <p>Shop Now</p>
            <i class="fa-solid fa-arrow-right pt-2 ps-2"></i>
            </div>
          </button>
          </div>
        </a>
        </div>
      </div>
      </div>
    @endforeach
    </div>
  </div>
</div>

<div class="noo " style="background-color: #f7f6f6;">
  <p class="fs-1 mx-5 pb-3 mt-4 fw-bolder ">Deals Of The Day</p>
  <div class="container">
    <div class="row">
      @foreach ($category as $item)


      <div class="col-lg-2 col-md-4 col-sm-6">
      <a class="card link-underline-light hnh mx-auto" href="{{route('product.detail', $item->id)}}"
        style=" background-color: #f7f6f6; border:#f7f6f6 1px solid;">
        <img src="../image/d1.jpg" class="card-img-top img-fluid " style="max-width: 100%; height: auto;" alt="...">
        <p class="card-text fw-medium">{{$item->category}}</p>
      </a>
      </div>
    @endforeach
    </div>
  </div>
  <p class="fs-1 mx-5 he pt-4 pb-3  fw-bolder ">Best Discounts For You</p>
  <div class="container">
    <div class="row">



      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d7.jpg" class="card-img-top img-fluid " style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text fw-medium">Min. 40% Off On Swings</p>
        </a>
      </div>

      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d8.jpg" class=" card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text fw-medium">Min. 30% Off On Office Chairs</p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d9.jpg" class="card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text  fw-medium">Min. 40% Off On Glass Mirror </p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style="  background-color: #f7f6f6; border : #f7f6f6 1px solid;">
          <img src="../image/d10.jpg" class="card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text fw-medium">Min. 50% Off On Makeup Kit</p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d11.jpg" class="card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text fw-medium">Min. 60% Off On Handsbags</p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d12.jpg" class="card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text fw-medium">Min. 60% Off On Perfumes</p>
        </a>
      </div>
    </div>
  </div>
  <p class="fs-1 mx-5 pt-4 pb-3 he fw-bolder ">Best Offers For You</p>
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d13.jpg" class="card-img-top img-fluid " style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text  fw-medium">Min. 40% Off On Kids Wear</p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d14.jpg" class=" card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text fw-medium">Min. 30% Off On Face Wash</p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d15.jpg" class="card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text  fw-medium">Min. 30% Off On Women Heels </p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6; border : white 1px solid;">
          <img src="../image/d16.jpg" class="card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text fw-medium">Min. 40% Off On Baby Toys </p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto" href="product.html"
          style=" background-color: #f7f6f6;  border:#f7f6f6 1px solid;">
          <img src="../image/d17.jpg" class="card-img-top img-fluid" style="max-width: 100%; height: auto;" alt="...">
          <p class="card-text fw-medium">Min. 60% Off On Herbal Products</p>
        </a>
      </div>
      <div class="col-lg-2 col-md-4 col-sm-6">
        <a class="card link-underline-light hnh mx-auto " style="  border:#f7f6f6 1px solid;">
          <img src="../image/d8.jpg" class="card-img-top img-fluid"
            style="max-width: 100%; height: auto;background-color: #f7f6f6;" alt="...">
          <p class="card-text fw-medium">Min. 30% Off On Office Chairs</p>
        </a>
      </div>
    </div>
  </div>
  <p class="ww3 fw-bold fs-2 text-white pt-5 mt-5" style="height: 60vh; text-align: center;">Pre-Fall Collection,That
    mid-summer<br>
    craving for fall styles?<br>
    <span> <a href="https://player.vimeo.com/video/145014989?h=7bf7190a1e">
        <i class="fa-solid fa-play  text-danger fs-5"
          style="background-color: white; margin-top: 6%; border-radius:9rem; padding: 1.6% 1.8%;"></i></a></span>
  </p>
  <div class="container">
    <div class="row">
      <p class="  fs-2 fw-bold pt-5 ps-5">Shop With Us </p>
      <p class="opacity-50 fs-5 ps-5 pb-3"> Handpicked Favourites just for you</p>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-opacity-10 mx-auto border-white bg-body-tertiary">
          <img src="../image/shop-1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text text-center fw-bold">Checkered Casual Shirt </p>
            <p class="text-secondary text-center"><del>
                $975.00</del> <span class="fw-bold text-danger opacity-1">$899.99</span></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-opacity-10 mx-auto border-white bg-body-tertiary">
          <img src="../image/shop-2.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <p class="card-text text-center fw-bold">Checkered Casual Shirt </p>
            <p class="text-secondary text-center "><del>
                $975.00</del> <span class="fw-bold text-danger opacity-1">$899.99</span></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-opacity-10 mx-auto border-white bg-body-tertiary">
          <img src="../image/shop-3.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <p class="card-text text-center fw-bold">Checkered Casual Shirt </p>
            <p class="text-secondary text-center "><del>
                $975.00</del> <span class="fw-bold text-danger opacity-1">$899.99</span></p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card border-opacity-10 mx-auto border-white bg-body-tertiary">
          <img src="../image/shop-4.jpg" class="card-img-top" alt="...">
          <div class="card-body ">
            <p class="card-text text-center fw-bold">Checkered Casual Shirt </p>
            <p class="text-secondary text-center "><del>
                $975.00</del> <span class="fw-bold text-danger opacity-1">$899.99</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="bh text-white ">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 pt-4">
          <span class="fw-bold text-danger">REVIEWS</span>
          <p class="fs-1 fw-bold ">What Clients Say ?</p>
          <p class="fs-5 pb-4 " style="color: #c2c2c2;;">Lorem ipsum viverra feugiat. Pellen <br>tesque libero ut
            justo, ultrices in ligula. Semper at tempufddfel.</p>
        </div>
        <div class="col-lg-8">

          <div id="carouselExample" class="carousel slide">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card ms-3 p-2">
                      <div class="card-body d-flex">
                        <p class="card-subtitle mb-2 "
                          style="font-size: large; color: #888; line-height: 1.5;word-spacing: 2px;"><i
                            class="fas fa-quote-left me-2 fs-3 text-danger"></i>Lorem ipsum dolor sit
                          amet elit. hic odio tenetur. ante ipsum primis in faucibus orci luctus et ultrices posuere.
                        </p>
                      </div>
                    </div>
                    <div class=" mb-3 mt-4 text-white" style="background: none; border: none;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="../image/team1.jpg" class="img-fluid ms-4 " alt="..."
                            style="width:63px ;height: 65px; border: 4px solid hsl(180deg 12% 98% / 18%);; border-radius: 90000px ;">
                        </div>
                        <div class="col-md-8">

                          <p class="fw-medium pe-5" style="font-size: large;">Jhonson William</p>
                          <p class="opacity-75" style="position: relative; bottom: 12px;">Example City</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card me-3 p-2">
                      <div class="card-body d-flex">
                        <p class="card-subtitle mb-2 "
                          style="font-size: large; color: #888; line-height: 1.5;word-spacing: 2px;"><i
                            class="fas fa-quote-left me-2 fs-3 text-danger"></i>Lorem ipsum dolor sit
                          amet elit. hic odio tenetur. ante ipsum primis in faucibus orci luctus et ultrices posuere.
                        </p>
                      </div>
                    </div>
                    <div class=" mb-3 mt-4 text-white" style="background: none; border: none;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="../image/team2.jpg" class="img-fluid ms-4 " alt="..."
                            style="width:63px ;height: 65px; border: 4px solid hsl(180deg 12% 98% / 18%);; border-radius: 90000px ;">
                        </div>
                        <div class="col-md-8">
                          <p class="fw-medium pe-5" style="font-size: large;">Alexander sakura</p>
                          <p class="opacity-75 " style="position: relative; bottom: 12px;">Example City</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card p-2 ms-3">
                      <div class="card-body d-flex">
                        <p class="card-subtitle mb-2 "
                          style="font-size: large; color: #888; line-height: 1.5;word-spacing: 2px;"><i
                            class="fas fa-quote-left me-2 fs-3 text-danger"></i>Lorem ipsum dolor sit
                          amet elit. hic odio tenetur. ante ipsum primis in faucibus orci luctus et ultrices posuere.
                        </p>
                      </div>
                    </div>
                    <div class=" mb-3 mt-4 text-white" style="background: none; border: none;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="../image/team3.jpg" class="img-fluid ms-4 " alt="..."
                            style="width:63px ;height: 65px; border: 4px solid hsl(180deg 12% 98% / 18%);; border-radius: 90000px ;">
                        </div>
                        <div class="col-md-8">
                          <p class="fw-medium pe-5" style="font-size: large;">Jhon Wilson</p>
                          <p class="opacity-75" style="position: relative; bottom: 12px;">Example City</p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card p-2 me-3">
                      <div class="card-body d-flex">
                        <p class="card-subtitle mb-2 "
                          style="font-size: large; color: #888; line-height: 1.5;word-spacing: 2px;"><i
                            class="fas fa-quote-left me-2 fs-3 text-danger"></i>Lorem ipsum dolor sit
                          amet elit. hic odio tenetur. ante ipsum primis in faucibus orci luctus et ultrices posuere.
                        </p>
                      </div>
                    </div>
                    <div class=" mb-3 mt-4 text-white" style="background: none; border: none;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="../image/team4.jpg" class="img-fluid ms-4 " alt="..."
                            style="width:63px ;height: 65px; border: 4px solid hsl(180deg 12% 98% / 18%);; border-radius: 90000px ;">
                        </div>
                        <div class="col-md-8">
                          <p class="fw-medium pe-5" style="font-size: large;">Julia sakura</p>
                          <p class="opacity-75 " style="position: relative; bottom: 12px;">Example City</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="carousel-item">
                <div class="row">
                  <div class="col-lg-6">
                    <div class="card ms-3 p-2">
                      <div class="card-body d-flex">
                        <p class="card-subtitle mb-2 "
                          style="font-size: large; color: #888; line-height: 1.5;word-spacing: 2px;"><i
                            class="fas fa-quote-left me-2 fs-3 text-danger"></i>Lorem ipsum dolor sit
                          amet elit. hic odio tenetur. ante ipsum primis in faucibus orci luctus et ultrices posuere.
                        </p>
                      </div>
                    </div>
                    <div class=" mb-3 mt-4 text-white" style="background: none; border: none;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="../image/team2.jpg" class="img-fluid ms-4 " alt="..."
                            style="width:63px ;height: 65px; border: 4px solid hsl(180deg 12% 98% / 18%);; border-radius: 90000px ;">
                        </div>
                        <div class="col-md-8">

                          <p class="fw-medium pe-5" style="font-size: large;">Jhon wilson</p>
                          <p class="opacity-75" style="position: relative; bottom: 12px;">Example City</p>


                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="card me-3 p-2">
                      <div class="card-body d-flex">
                        <p class="card-subtitle mb-2 "
                          style="font-size: large; color: #888; line-height: 1.5;word-spacing: 2px;"><i
                            class="fas fa-quote-left me-2 fs-3 text-danger"></i>Lorem ipsum dolor sit
                          amet elit. hic odio tenetur. ante ipsum primis in faucibus orci luctus et ultrices posuere.
                        </p>
                      </div>
                    </div>
                    <div class=" mb-3 mt-4 text-white" style="background: none; border: none;">
                      <div class="row g-0">
                        <div class="col-md-4">
                          <img src="../image/team3.jpg" class="img-fluid ms-4 " alt="..."
                            style="width:63px ;height: 65px; border: 4px solid hsl(180deg 12% 98% / 18%);; border-radius: 90000px ;">
                        </div>
                        <div class="col-md-8">

                          <p class="fw-medium pe-5" style="font-size: large;">Julia Sakura</p>
                          <p class="opacity-75 " style="position: relative; bottom: 12px;">Example City</p>


                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="text-center">
    <i class="fa-regular fa-envelope text-danger pt-5" style="font-size: 50px;"></i>
    <p class="fw-bold fs-1">Get On The list</p>
    <p class="fs-5 opacity-50">Shop Exclusive Promos & SAVE 20% on Your First Orde</p>
    <div class="center">
    </div>

    <div class="col-lg-12 col-md-12 col-sm-12">
      <div class="d-lg-flex text-center mb-3" style="padding: 0px 28%;">
        <div class="input-group input-group-md " style="margin: 0% 10px;">
          <input type="text" class="form-control p-3" aria-label="Sizing example input"
            aria-describedby="inputGroup-sizing-lg" style="background-color: #f2f1f1;" placeholder="Your email here">
        </div>
        <button class="btn fw-bold text-white px-lg-5 w-auto mt-sm-2"
          style="background-color: #ef233c;">Subscribe</button>
      </div>
    </div>

    <p>By entering your email, you are accepting our <span class="text-danger">Terms of Use</span> and<br> <span
        class="text-danger">Privacy Policy</span>.</p>
  </div>
</div>
</div>
</div>

@endsection