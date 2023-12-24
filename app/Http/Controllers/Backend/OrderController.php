<?php

namespace App\Http\Controllers\Backend;

use App\DataTables\OrderDataTable;
use App\Http\Controllers\Controller;
use App\Models\messageCancelOrder;
use Illuminate\Http\Request;
use App\Models\Order;

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
        
        return view('admin.order.show', compact('order', 'message'));
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
        $order->orderDetails()->delete();
        $order->delete();
        return response(['status'=>'success', 'message'=>'Xóa thành công']);
    }
    public function changeOrderStatus(Request $request){

        
        $order = Order::findOrFail($request->id);
        $order->status = $request->status;
        if($request->status === 'Đã hủy')
        {
            $order->enable = 0;
        }
        $order->save();
        return response(['status' => 'success', 'message'=>'Cập nhật trạng thái đơn hàng thành công']);

    }
}
