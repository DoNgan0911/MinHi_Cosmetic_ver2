<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;
use App\Models\Product;
use App\Models\ProductReview;

class FrontendProductController extends Controller
{
    //
    public function showProduct(String $name)
    {
        $product = Product::where('name', $name)->where('enable', 1)->first();
        $reviews = ProductReview::where('product_id', $product->id)->where('status', 1)->paginate(10) ;
        return view('frontend.pages.product-detail', compact('product', 'reviews'));
    }
}
