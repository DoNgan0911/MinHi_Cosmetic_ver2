<div class="dashboard_sidebar">
    <span class="close_icon">
      <i class="far fa-bars dash_bar"></i>
      <i class="far fa-times dash_close"></i>
    </span>
    <a href="{{route('home') }}" class="dash_logo"><h1 class="img-fluid w-100" style="color:aliceblue" >MinHi</h1>
    </a>
    <ul class="dashboard_link">
      {{-- <li><a class="active" href="dsahboard.html"><i class="fas fa-tachometer"></i>Dashboard</a></li> --}}
      <li><a href="{{ route('customer.orders.index') }}"><i class="fas fa-list-ul"></i> Đơn hàng của bạn</a></li>
      <li><a href="{{ route('customer.review.index') }}"><i class="fas fa-list-ul"></i> Đánh giá của bạn</a></li>
      {{-- <li><a href="dsahboard_download.html"><i class="far fa-cloud-download-alt"></i> Downloads</a></li> --}}
      {{-- <li><a href="dsahboard_review.html"><i class="far fa-star"></i> Reviews</a></li> --}}
      {{-- <li><a href="dsahboard_wishlist.html"><i class="far fa-heart"></i> Wishlist</a></li> --}}
      <li><a href="{{ route('customer.profile') }}"><i class="far fa-user"></i>Thông tin cá nhân</a></li>
      {{-- <li><a href="dsahboard_address.html"><i class="fal fa-gift-card"></i> Addresses</a></li> --}}
      <li>
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();"><i class="far fa-sign-out-alt"></i>Đăng xuất
            </a>
          </form>

      </li>
    </ul>
  </div>
  