<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $values = [];
    for ($i = 1; $i <= 12; $i++) {
        $total = DB::select('SELECT SUM(total) AS total_revenue FROM orders WHERE MONTH(date) = ' . $i);

        if ($total) {
            // echo "Tổng doanh thu tháng " . $i . ": " . $total[0]->total_revenue . "<br>";

            $values[] = (double) $total[0]->total_revenue;
        } else {
            // echo "Không có đơn hàng nào trong tháng " . $i . "<br>";
        }
    }
        return view('admin.dashboard', compact('values'));

    }
    public function login(){
        return view('admin.auth.login');

    }
}
