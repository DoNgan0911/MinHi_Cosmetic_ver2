<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Cart;
use Illuminate\Support\Facades\Redirect;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderDetail;
use Carbon\Carbon;


class CheckOutController extends Controller
{
    //
    public function index(){
        // dd(Cart::weight());
        if (!Cart::count()){
            return redirect(route('home'));
        }
        if(Auth::user())
        {
            $userId = Auth::user()->id;
            $user = User::find($userId); 
            $cartItems = Cart::content();
            $total = 0;
            foreach($cartItems as $item){
                $total += $item->price*$item->qty;
            }
            return view('frontend.pages.checkout', compact('user', 'total'));
        }
        else{
            $cartItems = Cart::content();
            $total = 0;
            foreach($cartItems as $item){
                $total += $item->price*$item->qty;
            }
            return view('frontend.pages.checkout', compact('total'));

        }
    }

    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt(
            $ch,
            CURLOPT_HTTPHEADER,
            array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data)
            )
        );
        curl_setopt($ch, CURLOPT_TIMEOUT, 5);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        //execute post
        $result = curl_exec($ch);
        //close connection
        curl_close($ch);
        return $result;
    }
    public function checkOutFormSubmit( Request $request ){
        $check = true;
        if($request->paymentMethod === 'COD' ){
            $orderId = 0;
            $this->storeOrder($request,$orderId,$check);
            $this->clearSession();
            // if($check){
                return response(['status' => 'success', 'redirect_url'=> route('customer.success', compact('orderId'))]);
            // } else {
            //     $message = "Có lỗi xảy ra về số lượng sản phẩm";
                // return response(['status' => 'error', 'redirect_url'=> route('customer.checkout', compact('message'))]);
            // }
        }else{
            $orderIdFind = 0;
            $this->storeOrderMOMO($request,$orderIdFind,$check);
            $this->clearSession();
            // if ($check){
            //     $message = "Có lỗi xảy ra về số lượng sản phẩm";
            //     return response(['status' => 'error', 'redirect_url'=> route('customer.checkout', compact('message'))]);
            // }
            $order = Order::findOrFail($orderIdFind)->first();
            $order->status = "Đang thanh toán"; 
            // dd($request->all());
            // dd(isset($_POST['payUrl']));
            if (isset($_POST['payUrl'])) {
                $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";
    
    
                $partnerCode = 'MOMOBKUN20180529';
                $accessKey = 'klm05TvNBzhg7h7j';
                $secretKey = 'at67qH6mk8w5Y1nAyMoYKMWACiEi2bsa';
    
    
                $orderInfo = "Thanh toán qua MoMo";
                $amount = $request->total;
                // $amount = "100000";
                // $orderId = (string)$orderIdFind . "";
                $orderId = time() . "";
                $redirectUrl = "http://official.test/customer/success/";
                $ipnUrl = "http://official.test/customer/success/"; 
                // $extraData = $request->input('address');
                $extraData = $orderIdFind ."";
                    $partnerCode = $partnerCode;
                    $accessKey = $accessKey;
                    $serectkey = $secretKey;
                    $orderId = $orderId; // Mã đơn hàng
                    $orderInfo = $orderInfo;
                    $amount = $amount;
                    $ipnUrl = $ipnUrl;
                    $redirectUrl = $redirectUrl;
                    $extraData = $extraData;
    
                    $requestId = time() . "";
                    $requestType = "payWithATM";
                    // $extraData = ($_POST["extraData"] ? $_POST["extraData"] : "");
                    //before sign HMAC SHA256 signature
                    $rawHash = "accessKey=" . $accessKey . "&amount=" . $amount . "&extraData=" . $extraData . "&ipnUrl=" . $ipnUrl . "&orderId=" . $orderId . "&orderInfo=" . $orderInfo . "&partnerCode=" . $partnerCode . "&redirectUrl=" . $redirectUrl . "&requestId=" . $requestId . "&requestType=" . $requestType;
                    $signature = hash_hmac("sha256", $rawHash, $serectkey);
                    $data = array('partnerCode' => $partnerCode,
            'partnerName' => "Test",
            "storeId" => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature);
            // dd($data);
        $result =$this->execPostRequest($endpoint, json_encode($data));
        $jsonResult = json_decode($result, true);  // decode json
    
        //Just a example, please check more in there
    
        // header('Location: ' . $jsonResult['payUrl']);
        return Redirect::to($jsonResult['payUrl']);
            }
        }
    }
    
    public function storeOrder(Request $request, &$orderId, &$check)
    { 
      
        $order = new Order();
        $order->name = $request->ten;
        $order->date = Carbon::now();
        $order->address = $request->address;
        $order->phone = $request->sdt;
        $order->status = 'Đã đặt hàng';
        $order->total = $request->total;
        $order->payment_method= $request->paymentMethod;
        if(Auth::user()){
            $order->user_id= Auth::user()->id;
            $user_id =       Auth::user()->id;
            $user = User::findOrFail($user_id);
            $user->total = $user->total + $request->total;
            $user->save();
        }
        else{
            $order->user_id= null;
        }
        $order->save();

        $orderId = $order->id;

        foreach(Cart::content() as $item){ 
            $product = Product::find($item->id);
            $orderdetail = new OrderDetail();
            $orderdetail->order_id = $order->id;
            $orderdetail->product_id = $product->id;
            $product->quantity= $product->quantity - $item->qty;
            $orderdetail->quantity = $item->qty;
            $orderdetail->price = $product->price;
            if ($product->quantity<0){
                $check = false;
            } else{
                $product->save();
                $orderdetail->save();    
            }
            $orderdetail->save();
        }       
    }
    public function storeOrderMOMO(Request $request, &$orderId, &$check)
    { 
        

        $order = new Order();
        $order->name = $request->ten;
        $order->date = Carbon::now();
        $order->address = $request->diachi;
        $order->phone = $request->sdt;
        $order->status = 'Đã đặt hàng';
        $order->total = $request->total;
        $order->payment_method= $request->exampleRadios;
        $order->payment_status = 'Đang Thanh Toán';
        $order->enable = false;
        if(Auth::user()){
            $order->user_id= Auth::user()->id;
        }
        else{
            $order->user_id= null;
        }
        $order->save();

        $orderId = $order->id;

        foreach(Cart::content() as $item){ 
            $product = Product::find($item->id);
            $orderdetail = new OrderDetail();
            $orderdetail->order_id = $order->id;
            $orderdetail->product_id = $product->id;
            $product->quantity= $product->quantity - $item->qty;
            $orderdetail->quantity = $item->qty;
            $orderdetail->price = $product->price;
            if ($product->quantity<0){
                $check= false;
            } else{
                $product->save();
                $orderdetail->save();    
            }
        }       
    }
    public function clearSession(){
        \Cart::destroy();
    }


}