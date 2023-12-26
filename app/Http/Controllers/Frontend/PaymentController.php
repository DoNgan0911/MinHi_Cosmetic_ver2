<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //
    
    public function codSuccess(Request $request){
        $message='';
        if(isset($_GET['partnerCode'])){
            $idOrder = $_GET['extraData'];
            $order = Order::findOrFail((int)$_GET['extraData']);
            if($_GET['message'] == "Successful."){
                $order->payment_status='Thanh toán thành công';
                $order->enable = true;
                if(Auth::user()){
                    $user_id =    Auth::user()->id;
                    $user = User::findOrFail($user_id);
                    $user->total = $user->total + $request->total;
                    $user->save();
                }
                else{
                    $order->user_id= null;
                }
                $message = "Thanh toán thành công đơn hàng. ID: " . $idOrder;
                
            } else {
                $order->payment_status='Thanh toán thất bại';
                $order->status = "Đã hủy";
                $order->enable = false;
                $message = "Thanh toán thất bại đơn hàng. ID: " . $idOrder;

            }
            $order->save();
        }else{
            $idOrder = $request->orderId;
            $message = "Đặt hàng thành công đơn hàng. ID: " . $idOrder;
        }
        
        return view('frontend.pages.cod-success', compact('message'));
        // gọi $this->storeOrder() rồi gọi clearSession rồi trả về view của payment success
    }

}
