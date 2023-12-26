<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\OrderDataTable;
use App\Http\Controllers\Controller;
use App\Models\messageCancelOrder;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(OrderDataTable $orderDataTable)
    {
        //
        return $orderDataTable->render('admin.order.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $order = Order::findOrFail($id);
        
    
        $message = messageCancelOrder::where('idOrder','=', $id)->first();
        
        if($order->user_id == null){
            $exist = false;
        } else $exist = true;
        return view('admin.order.show', compact('order', 'message', 'exist'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $order = Order::findOrFail($id);
        // dd($order);
        if($order->user_id === null){
            $order->enable = 0;
            // $orderdetails = $order->orderDetails();
            
            //     foreach($orderdetails as $item){
            //         $product = Product::findOrFail($item->product_id);
            //         $product->quantity = $product->quantity+ $item->quantity;
            //         $product->save();
            //     }
        }
        if($order->enable === 0){
            $order->orderDetails()->delete();
            $order->delete();
            return response(['status'=>'success', 'message'=>'Xóa thành công']);

        }
        return response(['status'=>'error', 'message'=>'Xóa thất bại']);
    }
    public function changeOrderStatus(Request $request){
        
        $order = Order::findOrFail($request->id);
        $order->status = $request->status;
        if($request->status === 'Đã hủy')
        {
            $order->enable = 0;
            if(Auth::user()){
                $user_id = $order->user_id;
                $user = User::findOrFail($user_id);
                $user->total = $user->total - $order->total;
                $user->save();

                // TRỪ SL SP
                // $orderdetails = OrderDetail::findOrFail($order->id);
                // // dd($orderdetails);
                // foreach($orderdetails as $item){
                //     $product = Product::findOrFail($item->product_id);
                //     $product->quantity += $item->quantity;
                //     $product->save();
                // }

            }
            else{
                $order->user_id= null;
            }

        }
        $order->save();
        return response(['status' => 'success', 'message'=>'Cập nhật trạng thái đơn hàng thành công']);

    }
}
