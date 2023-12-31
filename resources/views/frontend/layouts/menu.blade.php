@php
    $productsNTT = \App\Models\Product::where('enable', 1)->where('type', 'Nước tẩy trang') ->get();
    $productsSRM = \App\Models\Product::where('enable', 1)->where('type', 'Sữa rửa mặt') ->get();
    $productsKCN = \App\Models\Product::where('enable', 1)->where('type', 'Kem chống nắng') ->get();
    $productsKDA = \App\Models\Product::where('enable', 1)->where('type', 'Kem dưỡng ẩm') ->get();
    $productsSR = \App\Models\Product::where('enable', 1)->where('type', 'Serum') ->get();
@endphp

<nav class="wsus__main_menu d-none d-lg-block">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="relative_contect d-flex">
                    <div class="wsus_menu_category_bar">
                        <i class="far fa-bars"></i>
                    </div>
                        {{-- <ul class="wsus_menu_cat_item show_home toggle_menu">
                            <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-tshirt"></i> Nước tẩy trang </a>
                                <ul class="wsus_menu_cat_droapdown">
                                    @foreach ($productsNTT as $product)
                                    <li><a href="#">{{ $product->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-tshirt"></i> Kem chống nắng </a>
                                <ul class="wsus_menu_cat_droapdown">
                                    @foreach ($productsKCN as $product)
                                    <li><a href="#">{{ $product->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-tshirt"></i> Sữa rửa mặt </a>
                                <ul class="wsus_menu_cat_droapdown">
                                    @foreach ($productsSRM as $product)
                                    <li><a href="#">{{ $product->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                            <li><a class="wsus__droap_arrow" href="#"><i class="fal fa-tshirt"></i> Serum </a>
                                <ul class="wsus_menu_cat_droapdown">
                                    @foreach ($productsSR as $product)
                                    <li><a href="#">{{ $product->name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul> --}}

                    <ul class="wsus__menu_item">
                        <li><a class="active" href="{{ url('/') }}">home</a></li>
                            <li>
                                <a href="#">shop <i class="fas fa-caret-down"></i></a>
                                <div class="wsus__mega_menu">
                                    <div class="row">
                                        <div class="col-xl-3 col-lg-3" style="width:20%">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>Nước tẩy trang</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    @foreach ($productsNTT as $product)
                                                    <li><a href="{{ route('product-detail',$product->name) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3" style="width:20%">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>Sữa rửa mặt</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    @foreach ($productsSRM as $product)
                                                    <li><a href="{{ route('product-detail',$product->name) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3" style="width:20%">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>Kem chống nắng</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    @foreach ($productsKCN as $product)
                                                    <li><a href="{{ route('product-detail',$product->name) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3" style="width:20%">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>Serum</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    @foreach ($productsSR as $product)
                                                    <li><a href="{{ route('product-detail',$product->name) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3" style="width:20%">
                                            <div class="wsus__mega_menu_colum">
                                                <h4>Kem dưỡng ẩm</h4>
                                                <ul class="wsis__mega_menu_item">
                                                    @foreach ($productsKDA as $product)
                                                    <li><a href="{{ route('product-detail',$product->name) }}">{{ $product->name }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <li><a href="{{ route('product-tracking.index') }}">Tra cứu đơn hàng</a></li>
                    </ul>
                
                <ul class="wsus__menu_item wsus__menu_item_right">
                    {{-- <li><a href="contact.html">contact</a></li> --}}

                    <li><a {{ Auth::check() && Auth::user()->role == 'customer' ? 'href=' . route('customer.profile') : 'hidden' }}>Tài khoản</a></li>
                    <li>    <a {{ !Auth::check() ? 'href=' . route('login') : 'hidden' }}>Login</a> </li>                        </li>
                </ul>
                    
                </div>
            </div>
        </div>
    </div>
</nav>

<section id="wsus__mobile_menu">
    <span class="wsus__mobile_menu_close"><i class="fal fa-times"></i></span>
    <ul class="wsus__mobile_menu_header_icon d-inline-flex">

        <li><a href="wishlist.html"><i class="far fa-heart"></i> <span>2</span></a></li>

        <li><a href="compare.html"><i class="far fa-random"></i> </i><span>3</span></a></li>
    </ul>
    <form>
        <input type="text" placeholder="Search">
        <button type="submit"><i class="far fa-search"></i></button>
    </form>

    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home"
                role="tab" aria-controls="pills-home" aria-selected="true">Categories</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile"
                role="tab" aria-controls="pills-profile" aria-selected="false">main menu</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="wsus__mobile_menu_main_menu">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <ul class="wsus_mobile_menu_category">
                        <li><a href="#"><i class="fas fa-star"></i> hot promotions</a></li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThreew" aria-expanded="false"
                                aria-controls="flush-collapseThreew"><i class="fal fa-tshirt"></i> fashion</a>
                            <div id="flush-collapseThreew" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">men's</a></li>
                                        <li><a href="#">wemen's</a></li>
                                        <li><a href="#">kid's</a></li>
                                        <li><a href="#">others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThreer" aria-expanded="false"
                                aria-controls="flush-collapseThreer"><i class="fas fa-tv"></i> electronics</a>
                            <div id="flush-collapseThreer" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">Consumer Electronic</a></li>
                                        <li><a href="#">Accessories & Parts</a></li>
                                        <li><a href="#">other brands</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThreerrp" aria-expanded="false"
                                aria-controls="flush-collapseThreerrp"><i class="fas fa-chair-office"></i>
                                furnicture</a>
                            <div id="flush-collapseThreerrp" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">home</a></li>
                                        <li><a href="#">office</a></li>
                                        <li><a href="#">restaurent</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThreerrw" aria-expanded="false"
                                aria-controls="flush-collapseThreerrw"><i class="fal fa-mobile"></i> Smart
                                Phones</a>
                            <div id="flush-collapseThreerrw" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">apple</a></li>
                                        <li><a href="#">xiaomi</a></li>
                                        <li><a href="#">oppo</a></li>
                                        <li><a href="#">samsung</a></li>
                                        <li><a href="#">vivo</a></li>
                                        <li><a href="#">others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="#"><i class="fas fa-home-lg-alt"></i> Home & Garden</a></li>
                        <li><a href="#"><i class="far fa-camera"></i> Accessories</a></li>
                        <li><a href="#"><i class="fas fa-heartbeat"></i> healthy & Beauty</a></li>
                        <li><a href="#"><i class="fal fa-gift-card"></i> Gift Ideas</a></li>
                        <li><a href="#"><i class="fal fa-gamepad-alt"></i> Toy & Games</a></li>
                        <li><a href="#"><i class="fal fa-gem"></i> View All Categories</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="wsus__mobile_menu_main_menu">
                <div class="accordion accordion-flush" id="accordionFlushExample2">
                    <ul>
                        <li><a href="index.html">home</a></li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">shop</a>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="#">men's</a></li>
                                        <li><a href="#">wemen's</a></li>
                                        <li><a href="#">kid's</a></li>
                                        <li><a href="#">others</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="vendor.html">vendor</a></li>
                        <li><a href="blog.html">blog</a></li>
                        <li><a href="daily_deals.html">campain</a></li>
                        <li><a href="#" class="accordion-button collapsed" data-bs-toggle="collapse"
                                data-bs-target="#flush-collapseThree101" aria-expanded="false"
                                aria-controls="flush-collapseThree101">pages</a>
                            <div id="flush-collapseThree101" class="accordion-collapse collapse"
                                data-bs-parent="#accordionFlushExample2">
                                <div class="accordion-body">
                                    <ul>
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="faqs.html">faq</a></li>
                                        <li><a href="invoice.html">invoice</a></li>
                                        <li><a href="about_us.html">about</a></li>
                                        <li><a href="team.html">team</a></li>
                                        <li><a href="product_grid_view.html">product grid view</a></li>
                                        <li><a href="product_grid_view.html">product list view</a></li>
                                        <li><a href="team_details.html">team details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li><a href="{{ route('product-tracking.index') }}">track order</a></li>
                        <li><a href="daily_deals.html">daily deals</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>