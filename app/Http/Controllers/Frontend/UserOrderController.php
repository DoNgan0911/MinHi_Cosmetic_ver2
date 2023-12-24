<?php

namespace App\Http\Controllers\Frontend;
use App\DataTables\UserOrderDataTable;
use App\Http\Controllers\Controller;
use App\Models\messageCancelOrder;
use Illuminate\Http\Request;
use App\Models\Order;
use Illuminate\Support\Carbon;

    class UserOrderController extends Controller
    {
        //
        public function index(UserOrderDataTable $dataTable){
            return $dataTable->render('frontend.dashboard.order.index');

        }
        public function show(string $id){
            $order = Order::findOrFail($id);
            
            return view('frontend.dashboard.order.show', compact('order'));

        }
        public function cancel(Request $request){
            // dd($request->all());
                $messageCancelOrder = new messageCancelOrder();
                $messageCancelOrder->description = $request->description;
                $messageCancelOrder->date = Carbon::now();
                $messageCancelOrder->idOrder = $request->idorder;
                $messageCancelOrder->save();

                $order = Order::findOrFail($request->idorder);
                $order->status = 'Đợi xác nhận hủy';
                $order->save();
                return redirect()->route('customer.orders.index');
            }
    }
