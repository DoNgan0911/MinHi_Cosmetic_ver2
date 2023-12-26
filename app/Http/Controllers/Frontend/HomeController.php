<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        if(Auth::user()){
            if(Auth::user()->role === 'admin'){
                return redirect(route('admin.dashboard'));

            }
        }
        return view('frontend.home.home', compact('products'));
    }
}
