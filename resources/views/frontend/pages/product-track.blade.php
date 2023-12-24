@extends('frontend.layouts.master')
@section('title')
MinHi || Theo dõi đơn hàng
@endsection
@section('content')
<section id="wsus__breadcrumb">
    <div class="wsus_breadcrumb_overlay">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4>order tracking</h4>
                    <ul>
                        <li><a href="#">home</a></li>
                        <li><a href="#">order tracking</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============================
    BREADCRUMB END
==============================-->


<!--============================
    TRACKING ORDER START
==============================-->
<section id="wsus__login_register">
    <div class="container">
        <div class="wsus__track_area">
            <div class="row">
                <div class="col-xl-5 col-md-10 col-lg-8 m-auto">
                    <form class="tack_form" action="{{ route('product-tracking.index') }}" method="GET">
                        
                        <h4 class="text-center">order tracking</h4>
                        <p class="text-center">tracking your order status</p>
                        <div class="wsus__track_input">
                            <label class="d-block mb-2">order id*</label>
                            <input type="text" placeholder="#H25-21578455" name="tracker" value="{{ @$order->id }}">
                        </div>
                        <button type="submit" class="common_btn">track</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="wsus__track_header">
                        <div class="wsus__track_header_text">
                            <div class="row">
                                <div class="col-xl-3 col-sm-6 col-lg-3">
                                    <div class="wsus__track_header_single">
                                        <h5>Ngày đặt hàng</h5>
                                        <p>{{ @$order->date }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-lg-3">
                                    <div class="wsus__track_header_single">
                                        <h5>Người mua:</h5>
                                        <p>{{ @$order->user->name }}</p>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-6 col-lg-3">
                                    <div class="wsus__track_header_single">
                                        <h5>Trạng thái:</h5>
                                        <p>{{ @$order->status }}</p>
                                    </div>
                                </div>
                                 
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <ul class="progtrckr" data-progtrckr-steps="4">
                            <li class="progtrckr_done icon_one check_mark">Đã đặt hàng</li>
                            <li class="progtrckr_done icon_two
                            @if (
                            @$order->status == 'đang chuẩn bị' ||
                            @$order->status == 'đang giao hàng' ||
                            @$order->status == 'thành công' 
                            ) check_mark
                            @endif
                            ">Đang chuẩn bị</li>
                            <li class="icon_three 
                            @if(
                            @$order->status == 'đang giao hàng' ||
                            @$order->status == 'thành công' 
                            ) check_mark
                            @endif
                            ">Đang giao hàng</li>
                            <li class="icon_four 
                            @if(
                            @$order->status == 'thành công' 
                            ) check_mark
                            @endif
                            ">thành công</li>
                            
                    </ul>
                </div>
                <div class="col-xl-12">
                    <a href="#" class="common_btn"><i class="fas fa-chevron-left"></i> back to order</a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection