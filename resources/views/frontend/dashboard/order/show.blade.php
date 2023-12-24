@extends('frontend.dashboard.layouts.master')
@section('content')
    <section class="section">
        @extends('frontend.dashboard.layouts.sidebar')
      <div class="section-body">
        <div class="row">
          <div class="col-12 ">
            <div class="card" style="width:90%; margin-left: 250px">
              <div class="card-header">
                <h4>Chi tiết đơn hàng</h4>
                
              </div>
              <div class="section-body">
                <div class="invoice">

                  <div class="invoice-print">
                    <div class="row">
                      <div class="col-lg-12">
                        <div class="invoice-title">
                          <div class="invoice-number">Order #{{ $order->id }}</div>
                        </div>
                        <hr>
                        <div class="row">
                          <div class="col-md-6">
                            <address>
                              <strong>Người gửi:</strong><br>
                                MinHi Cosmetic<br>
                                123 Nguyễn Đình Chiểu, Quận 1 TPHCM<br>
                                09000001<br>
                            </address>
                          </div>
                          <div class="col-md-6 text-md-right">
                            <address>
                              <strong>Người nhận:</strong><br>
                              {{ $order->name }}<br>
                              {{ $order->address }}<br>
                              {{ $order->phone }}<br>
                            </address>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <address>
                              <strong>Phương thức thanh toán:</strong><br>
                              {{ $order->payment_method }}<br>
                          
                            </address>
                          </div>
                          <div class="col-md-6 text-md-right">
                            <address>
                              <strong>Ngày đặt hàng:</strong><br>
                              {{ $order->date }}<br><br>
                            </address>
                          </div>
                          <div class="col-md-6 text-md-right">
                            <address>
                              <strong>Trạng thái đơn hàng:</strong><br>
                              {{ $order->status }}<br><br>
                            </address>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="row mt-4">
                      <div class="col-md-12">
                        <div class="section-title">Chi tiết</div>
                        <div class="table-responsive">
                          <table class="table table-striped table-hover table-md">
                            <tr>
                              <th>Tên sản phẩm</th>
                              <th class="text-center">Giá</th>
                              <th class="text-center">Số lượng mua</th>
                              <th class="text-right">Tổng</th>

                            </tr>
                            @foreach ($order->orderDetails as $detail)
                            <tr>
                              <td>{{ $detail->product->name }}</td>
                              <td class="text-center">{{ $detail->product->price  }}</td>
                              <td class="text-center">{{$detail->quantity }}</td>
                              <td class="text-right">{{ $detail->product->price * $detail->quantity  }}</td>
                            </tr>  
                            @endforeach
                        
                          </table>
                        </div>
                        <div class="row mt-4">
                          <div class="col-lg-8">
                            <div class="col-md-4">
                                {{-- <div class="form-group">
                                    <label for="">Trạng thái đơn hàng</label>
                                    <select name="order_status" class="form-control" id="order_status" data-id="{{ $order->id }}" >
                                        @foreach (config('order_status.oder_status_admin') as $key => $orderStatus)
                                            <option {{ $order->order_status === $key ? 'selected' :'' }} value="{{ $key }}">{{ $orderStatus['status'] }}</option>
                                            
                                        @endforeach
                                    </select>
                                </div> --}}
                            </div>
                          </div>
                          <div class="col-lg-4 text-right">
                            <div class="invoice-detail-item">
                              <div class="invoice-detail-name">Tổng hóa đơn</div>
                              <div class="invoice-detail-value invoice-detail-value-lg">{{ $order->total }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <hr>
                  <div class="text-md-right">
                    @if ($order->status === 'Đã đặt hàng' || $order->status === 'Đang chuẩn bị')
                     <form action="{{ route('customer.cancel-order.cancel') }}" style="margin-top: 100px" method="POST">
                      @csrf
                      <input type="text" name="idorder" id="" value="{{ $order->id }}" hidden>
                      <div><textarea name="description" type="text" style="width:300px; height:50px; margin-bottom:20px" placeholder="Tại sao bạn muốn hủy đơn?"></textarea></div>
                        <button class="btn btn-warning btn-icon icon-left">Hủy đơn hàng</button>
                     </form>
                    @endif
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
    
      </div>
    </section>

@endsection
