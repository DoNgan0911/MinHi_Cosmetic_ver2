@extends('frontend.layouts.master')
@section('title')
    MinHi_Cosmetic
@endsection
@section('content')
        <!--==========================
      PRODUCT MODAL VIEW START
    ===========================-->
    <section class="product_popup_modal">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                                class="far fa-times"></i></button>
                        <div class="row">
                            <div class="col-xl-6 col-12 col-sm-10 col-md-8 col-lg-6 m-auto display">
                                <div class="wsus__quick_view_img">
                                    <a class="venobox wsus__pro_det_video" data-autoplay="true" data-vbtype="video"
                                        href="https://youtu.be/7m16dFI1AF8">
                                        <i class="fas fa-play"></i>
                                    </a>
                                    <div class="row modal_slider">
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom1.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom2.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom3.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="modal_slider_img">
                                                <img src="images/zoom4.jpg" alt="product" class="img-fluid w-100">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-12 col-sm-12 col-md-12 col-lg-6">
                                <div class="wsus__pro_details_text">
                                    <a class="title" href="#">Electronics Black Wrist Watch</a>
                                    <p class="wsus__stock_area"><span class="in_stock">in stock</span> (167 item)</p>
                                    <h4>$50.00 <del>$60.00</del></h4>
                                    <p class="review">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                        <span>20 review</span>
                                    </p>
                                    <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                                    <div class="wsus_pro_hot_deals">
                                        <h5>offer ending time : </h5>
                                        <div class="simply-countdown simply-countdown-one"></div>
                                    </div>
                                    <div class="wsus_pro_det_color">
                                        <h5>color :</h5>
                                        <ul>
                                            <li><a class="blue" href="#"><i class="far fa-check"></i></a></li>
                                            <li><a class="orange" href="#"><i class="far fa-check"></i></a></li>
                                            <li><a class="yellow" href="#"><i class="far fa-check"></i></a></li>
                                            <li><a class="black" href="#"><i class="far fa-check"></i></a></li>
                                            <li><a class="red" href="#"><i class="far fa-check"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="wsus_pro__det_size">
                                        <h5>size :</h5>
                                        <ul>
                                            <li><a href="#">S</a></li>
                                            <li><a href="#">M</a></li>
                                            <li><a href="#">L</a></li>
                                            <li><a href="#">XL</a></li>
                                        </ul>
                                    </div>
                                    <div class="wsus__quentity">
                                        <h5>quentity :</h5>
                                        <form class="select_number">
                                            <input class="number_area" type="text" min="1" max="100" value="1" />
                                        </form>
                                        <h3>$50.00</h3>
                                    </div>
                                    <div class="wsus__selectbox">
                                        <div class="row">
                                            <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div>
                                            {{-- <div class="col-xl-6 col-sm-6">
                                                <h5 class="mb-2">select:</h5>
                                                <select class="select_2" name="state">
                                                    <option>default select</option>
                                                    <option>select 1</option>
                                                    <option>select 2</option>
                                                    <option>select 3</option>
                                                    <option>select 4</option>
                                                </select>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <ul class="wsus__button_area">
                                        <li><a class="add_cart" href="#">add to cart</a></li>
                                        <li><a class="buy_now" href="#">buy now</a></li>
                                        <li><a href="#"><i class="fal fa-heart"></i></a></li>
                                        <li><a href="#"><i class="far fa-random"></i></a></li>
                                    </ul>
                                    <p class="brand_model"><span>model :</span> 12345670</p>
                                    <p class="brand_model"><span>brand :</span> The Northland</p>
                                    <div class="wsus__pro_det_share">
                                        <h5>share :</h5>
                                        <ul class="d-flex">
                                            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
                                            <li><a class="whatsapp" href="#"><i class="fab fa-whatsapp"></i></a></li>
                                            <li><a class="instagram" href="#"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==========================
      PRODUCT MODAL VIEW END
    ===========================-->

    
    <!--============================
        BANNER PART 2 START
    ==============================-->
        @include('frontend.home.sections.banner-slider')
    <!--============================
        BANNER PART 2 END
    ==============================-->
    <section id="wsus__product_page">
        <div class="container">
            <div class="row">
                {{-- <div class="col-xl-12">
                    <div class="wsus__pro_page_bammer">
                        <div class="wsus__pro_page_bammer_text">
                            <div class="wsus__pro_page_bammer_text_center">
                                <p>up to <span>70% off</span></p>
                                <h5>wemen's jeans Collection</h5>
                                <h3>fashion for wemen's</h3>
                                <a href="#" class="add_cart">Discover Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="wsus__sidebar_filter ">
                        <p>filter</p>
                        <span class="wsus__filter_icon">
                            <i class="far fa-minus" id="minus"></i>
                            <i class="far fa-plus" id="plus"></i>
                        </span>
                    </div>
                    <div class="wsus__product_sidebar" id="sticky_sidebar">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Danh mục
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li><a href="#">Nước tẩy trang</a></li>
                                            <li><a href="#">Sữa rửa mặt</a></li>
                                            <li><a href="#">Kem chống nắng</a></li>
                                            <li><a href="#">Kem dưỡng ẩm</a></li>
                                            <li><a href="#">Serum</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Giá
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse show"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="price_ranger">
                                            <input type="hidden" id="slider_range" class="flat-slider" />
                                            <button type="submit" class="common_btn">Lọc</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                            
                            
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-9 col-lg-8">
                    <div class="row">
                        <div class="col-xl-12 d-none d-md-block mt-md-4 mt-lg-0">
                            <div class="wsus__product_topbar">
                                <div class="wsus__product_topbar_left">
                                    <div class="nav nav-pills" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" type="button" role="tab"
                                            aria-controls="v-pills-home" aria-selected="true">
                                            <i class="fas fa-th"></i>
                                        </button>
                                        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false">
                                            <i class="fas fa-list-ul"></i>
                                        </button>
                                    </div>  
                                    {{-- <div class="wsus__topbar_select">
                                        <select class="select_2" name="state">
                                            <option>default shorting</option>
                                            <option>short by rating</option>
                                            <option>short by latest</option>
                                            <option>low to high </option>
                                            <option>high to low</option>
                                        </select>
                                    </div> --}}
                                </div>
                                {{-- <div class="wsus__topbar_select">
                                    <select class="select_2" name="state">
                                        <option>show 12</option>
                                        <option>show 15</option>
                                        <option>show 18</option>
                                        <option>show 21</option>
                                    </select>
                                </div> --}}
                            </div>
                        </div>
                        {{--  --}}
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab" style="width: 90%">
                                <div class="row">
                                    <h2 style="text-align: center">Nước tẩy trang</h2>
                                    @foreach ($products as $product)
                                        @if ($product->type ==='Nước tẩy trang')
                                            <div class="col-xl-4  col-sm-6">
                                                <div class="wsus__product_item">
                                                    <a class="wsus__pro_link" href="product_details.html">
                                                        <img src="{{ asset($product->link_photo) }}" alt="product"
                                                            class="img-fluid w-100 img_1" />
                                                    </a>
                                                    <ul class="wsus__single_pro_icon">
                                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="far fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="far fa-random"></i></a>
                                                    </ul>
                                                    <div class="wsus__product_details">
                                                        <a  href="{{ route('product-detail',$product->name) }}">{{ $product->type }} {{ $product->name }}</a>
                                                        <a class="wsus__pro_name" href="#">{{ $product->skin_problem }}</a>
                                                        <p class="wsus__price">{{ $product->price }} vnd</p>

                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        @endif      
                                    @endforeach

                                </div>
                                <div class="row">
                                    <h2 style="text-align: center">Sữa rửa mặtt</h2>
                                    @foreach ($products as $product)
                                        @if ($product->type ==='Sữa rửa mặt')
                                            <div class="col-xl-4  col-sm-6">
                                                <div class="wsus__product_item">
                                                    <a class="wsus__pro_link" href="product_details.html">
                                                        <img src="{{ asset($product->link_photo) }}" alt="product"
                                                            class="img-fluid w-100 img_1" />
                                                    </a>
                                                    <ul class="wsus__single_pro_icon">
                                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="far fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="far fa-random"></i></a>
                                                    </ul>
                                                    <div class="wsus__product_details">
                                                        <a  href="{{ route('product-detail',$product->name) }}">{{ $product->type }} {{ $product->name }}</a>
                                                        <a class="wsus__pro_name" href="#">{{ $product->skin_problem }}</a>
                                                        <p class="wsus__price">{{ $product->price }} vnd</p>

                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        @endif      
                                    @endforeach

                                </div>
                                <div class="row">
                                    <h2 style="text-align: center">Kem chống nắng</h2>
                                    @foreach ($products as $product)
                                        @if ($product->type ==='Kem chống nắng')
                                            <div class="col-xl-4  col-sm-6">
                                                <div class="wsus__product_item">
                                                    <a class="wsus__pro_link" href="product_details.html">
                                                        <img src="{{ asset($product->link_photo) }}" alt="product"
                                                            class="img-fluid w-100 img_1" />
                                                    </a>
                                                    <ul class="wsus__single_pro_icon">
                                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="far fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="far fa-random"></i></a>
                                                    </ul>
                                                    <div class="wsus__product_details">
                                                        <a  href="{{ route('product-detail',$product->name) }}">{{ $product->type }} {{ $product->name }}</a>
                                                        <a class="wsus__pro_name" href="#">{{ $product->skin_problem }}</a>
                                                        <p class="wsus__price">{{ $product->price }} vnd</p>

                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        @endif      
                                    @endforeach

                                </div>
                                <div class="row">
                                    <h2 style="text-align: center">Serum</h2>
                                    @foreach ($products as $product)
                                        @if ($product->type ==='Serum')
                                            <div class="col-xl-4  col-sm-6">
                                                <div class="wsus__product_item">
                                                    <a class="wsus__pro_link" href="product_details.html">
                                                        <img src="{{ asset($product->link_photo) }}" alt="product"
                                                            class="img-fluid w-100 img_1" />
                                                    </a>
                                                    <ul class="wsus__single_pro_icon">
                                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="far fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="far fa-random"></i></a>
                                                    </ul>
                                                    <div class="wsus__product_details">
                                                        <a  href="{{ route('product-detail',$product->name) }}">{{ $product->type }} {{ $product->name }}</a>
                                                        <a class="wsus__pro_name" href="#">{{ $product->skin_problem }}</a>
                                                        <p class="wsus__price">{{ $product->price }} vnd</p>

                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        @endif      
                                    @endforeach

                                </div>
                                <div class="row">
                                    <h2 style="text-align: center">Kem dưỡng ẩm</h2>
                                    @foreach ($products as $product)
                                        @if ($product->type ==='Kem dưỡng ẩm')
                                            <div class="col-xl-4  col-sm-6">
                                                <div class="wsus__product_item">
                                                    <a class="wsus__pro_link" href="product_details.html">
                                                        <img src="{{ asset($product->link_photo) }}" alt="product"
                                                            class="img-fluid w-100 img_1" />
                                                    </a>
                                                    <ul class="wsus__single_pro_icon">
                                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="far fa-eye"></i></a></li>
                                                        <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                        <li><a href="#"><i class="far fa-random"></i></a>
                                                    </ul>
                                                    <div class="wsus__product_details">
                                                        <a  href="{{ route('product-detail',$product->name) }}">{{ $product->type }} {{ $product->name }}</a>
                                                        <a class="wsus__pro_name" href="#">{{ $product->skin_problem }}</a>
                                                        <p class="wsus__price">{{ $product->price }} vnd</p>

                                                    
                                                    </div>
                                                </div>
                                            </div>
                                        @endif      
                                    @endforeach

                                </div>
                            </div>


                            {{-- <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="row">
                                    @foreach ($products as $product)
                                    <div class="col-xl-12">
                                        <div class="wsus__product_item wsus__list_view">
                                            <a class="wsus__pro_link" href="product_details.html">
                                                <img src="" alt="product"
                                                    class="img-fluid w-100 img_1" />
                                            </a>
                                            <div class="wsus__product_details">
                                                <a class="wsus__category" href="#">fashion </a>
                                                <p class="wsus__pro_rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                    <span>(17 review)</span>
                                                </p>
                                                <a class="wsus__pro_name" href="#">{{ $product->name }}</a>
                                                <p class="wsus__price">$159 <del>$200</del></p>
                                                <p class="list_description">Ultrices eros in cursus turpis massa cursus
                                                    mattis. Volutpat ac tincidunt vitae semper quis lectus. Aliquam id
                                                    diam maecenas ultricies… </p>
                                                <ul class="wsus__single_pro_icon">
                                                    <li><a class="add_cart" href="#">add to cart</a></li>
                                                    <li><a href="#"><i class="far fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="far fa-random"></i></a>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    @endforeach
                                  
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    {{-- <section id="pagination">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class="fas fa-chevron-left"></i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link page_active" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">4</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </section> --}}
                </div>
            </div>
        </div>
    </section>

    <!--============================
        FLASH SELL START
    ==============================-->
    {{-- @include('frontend.home.sections.flash-sale') --}}
    <!--============================
        FLASH SELL END
    ==============================-->


    <!--============================
       MONTHLY TOP PRODUCT START
    ==============================-->
    {{-- @include('frontend.home.sections.top-category-product') --}}
    <!--============================
       MONTHLY TOP PRODUCT END
    ==============================-->


    <!--============================
        BRAND SLIDER START
    ==============================-->
    {{-- @include('frontend.home.sections.brand-slider') --}}
    <!--============================
        BRAND SLIDER END
    ==============================-->


    <!--============================
        SINGLE BANNER START
    ==============================-->
    {{-- @include('frontend.home.sections.single-banner') --}}
    <!--============================
        SINGLE BANNER END  
    ==============================-->


    <!--============================
        HOT DEALS START
    ==============================-->
    {{-- @include('frontend.home.sections.hot-deals') --}}
    <!--============================
        HOT DEALS END  
    ==============================-->


    <!--============================
        ELECTRONIC PART START  
    ==============================-->
    {{-- @include('frontend.home.sections.category-product-slider-one') --}}
    <!--============================
        ELECTRONIC PART END  
    ==============================-->


    <!--============================
        ELECTRONIC PART START  
    ==============================-->
    {{-- <section id="wsus__electronic2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>Apparels & Clothings</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row flash_sell_slider">
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/pro8.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/pro8_8.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(10 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">weman's fashion one pcs</a>
                            <p class="wsus__price">$99</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/kids_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/kids_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(41 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">kid's fashion party dress</a>
                            <p class="wsus__price">$110</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/blazer_1.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/blazer_2.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(40 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">man's fashion blazer</a>
                            <p class="wsus__price">$180 <del>$200</del></p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__minus">-20%</span>
                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/wemans_2.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/wemans_1.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(99 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">weman's fashion one pcs</a>
                            <p class="wsus__price">$59</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-4">
                    <div class="wsus__product_item">
                        <span class="wsus__new">New</span>

                        <a class="wsus__pro_link" href="product_details.html">
                            <img src="images/wemans_2.jpg" alt="product" class="img-fluid w-100 img_1" />
                            <img src="images/wemans_1.jpg" alt="product" class="img-fluid w-100 img_2" />
                        </a>
                        <ul class="wsus__single_pro_icon">
                            <li><a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                        class="far fa-eye"></i></a></li>
                            <li><a href="#"><i class="far fa-heart"></i></a></li>
                            <li><a href="#"><i class="far fa-random"></i></a>
                        </ul>
                        <div class="wsus__product_details">
                            <a class="wsus__category" href="#">fashion </a>
                            <p class="wsus__pro_rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                                <span>(99 review)</span>
                            </p>
                            <a class="wsus__pro_name" href="#">weman's fashion one pcs</a>
                            <p class="wsus__price">$59</p>
                            <a class="add_cart" href="#">add to cart</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--============================
        ELECTRONIC PART END  
    ==============================-->


    <!--============================
        LARGE BANNER  START  
    ==============================-->
    {{-- <section id="wsus__large_banner">
        <div class="container">
            <div class="row">
                <div class="cl-xl-12">
                    <div class="wsus__large_banner_content" style="background: url(images/large_banner_img.jpg);">
                        <div class="wsus__large_banner_content_overlay">
                            <div class="row">
                                <div class="col-xl-6 col-12 col-md-6">
                                    <div class="wsus__large_banner_text">
                                        <h3>This Week's Deal</h3>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem repudiandae in
                                            ipsam
                                            nesciunt.</p>
                                        <a class="shop_btn" href="#">view more</a>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-12 col-md-6">
                                    <div class="wsus__large_banner_text wsus__large_banner_text_right">
                                        <h3>headphones</h3>
                                        <h5>up to 20% off</h5>
                                        <p>Spring's collection has discounted now!</p>
                                        <a class="shop_btn" href="#">shop now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--============================
        LARGE BANNER  END  
    ==============================-->


    <!--============================
        WEEKLY BEST ITEM START  
    ==============================-->
    {{-- <section id="wsus__weekly_best" class="home2_wsus__weekly_best_2 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-sm-6">
                    <div class="wsus__section_header">
                        <h3>weekly best rated Products</h3>
                    </div>
                    <div class="row weekly_best2">
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro3.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>hp 24" FHD monitore</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro10.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>MSI gaming chair</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9_9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-sm-6">
                    <div class="wsus__section_header">
                        <h3>weekly best Sale Products</h3>
                    </div>
                    <div class="row weekly_best2">
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro3.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>hp 24" FHD monitore</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro10.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>MSI gaming chair</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro9_9.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's sholder bag</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <a class="wsus__hot_deals__single" href="#">
                                <div class="wsus__hot_deals__single_img">
                                    <img src="images/pro4_4.jpg" alt="bag" class="img-fluid w-100">
                                </div>
                                <div class="wsus__hot_deals__single_text">
                                    <h5>men's casual watch</h5>
                                    <p class="wsus__rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </p>
                                    <p class="wsus__tk">$120.20 <del>130.00</del></p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--============================
        WEEKLY BEST ITEM END 
    ==============================-->


    <!--============================
      HOME SERVICES START
    ==============================-->
    {{-- <section id="wsus__home_services" class="home_service_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2 border_left">
                        <i class="fal fa-truck"></i>
                        <h5>Free Worldwide Shipping</h5>
                        <p>Free shipping coast for all country</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="fal fa-headset"></i>
                        <h5>24/7 Customer Support</h5>
                        <p>Friendly 24/7 customer support</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3 pe-lg-0">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="far fa-exchange-alt"></i>
                        <h5>Money Back Guarantee</h5>
                        <p>We return money within 30 days</p>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-lg-3">
                    <div class="wsus__home_services_single home_service_single_2">
                        <i class="fal fa-credit-card"></i>
                        <h5>Secure Online Payment</h5>
                        <p>We posess SSL / Secure Certificate</p>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--============================
        HOME SERVICES END
    ==============================-->


    <!--============================
        HOME BLOGS START
    ==============================-->
    {{-- <section id="wsus__blogs" class="home_blogs">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__section_header">
                        <h3>recent blogs</h3>
                        <a class="see_btn" href="#">see more <i class="fas fa-caret-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row home_blog_slider">
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_1.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top red" href="#">women's</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">New found the women’s shirt for summer season</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_2.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top blue" href="#">lifestyle</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">Fusce lacinia arcuet nulla menasious</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_3.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top orange" href="#">lifestyle</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">found the men’s shirt for summer season</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_4.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top orange" href="#">fashion</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">winter collection for women’s</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="wsus__single_blog wsus__single_blog_2">
                        <a class="wsus__blog_img" href="#">
                            <img src="images/blog_5.jpg" alt="blog" class="img-fluid w-100">
                        </a>
                        <div class="wsus__blog_text">
                            <a class="blog_top red" href="#">lifestyle</a>
                            <div class="wsus__blog_text_center">
                                <a href="blog_details.html">Comes a cool blog post with Images</a>
                                <p class="date">nov 04 2021</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!--============================
        HOME BLOGS END
    ==============================-->

@include('frontend.layouts.footer')
@endsection
