<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order;
use App\Models\User;
use App\Models\Product;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $values = [];
    for ($i = 1; $i <= 12; $i++) {
        $total = DB::select('SELECT SUM(total) AS total_revenue FROM orders WHERE MONTH(date) = ' . $i . ' AND ENABLE = 1');

        if ($total) {
            // echo "Tổng doanh thu tháng " . $i . ": " . $total[0]->total_revenue . "<br>";

            $values[] = (double) $total[0]->total_revenue;
        } else {
            // echo "Không có đơn hàng nào trong tháng " . $i . "<br>";
        }
    }   
        $t = Order::count();
        $tc = Order::where('status', 'Thành công')->count();
        $kh = User::where('role', 'customer')->count();
        $sp = Product::where('enable', 1)->count();
        return view('admin.dashboard', compact('values', 't','tc', 'kh', 'sp'));

    }
    public function login(){
        return view('admin.auth.login');

    }
}
