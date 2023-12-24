<?php

namespace App\Http\Controllers\Frontend;

use App\DataTables\UserProductReviewsDataTable;
use App\Http\Controllers\Controller;
use App\Models\ProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    //
    public function index(UserProductReviewsDataTable $userProductReviewsDataTable){
        return $userProductReviewsDataTable->render('frontend.dashboard.review.index');

    }
    public function create(Request $request){



        $request->validate([
            'rating'=>['required'],
            'review' => ['required', 'max:200']
        ]);

        $checkReviewExist = ProductReview::where(['product_id'=>$request->product_id,'user_id'=>Auth::user()->id ])->first();
        if($checkReviewExist){
            toastr('Bạn đã đánh giá sản phẩm này', 'error', 'error');
            return redirect()->back();
        }
        $productReview = new ProductReview();
        $productReview->product_id = $request->product_id;
        $productReview->user_id = Auth::user()->id;
        $productReview->review = $request->review;
        $productReview->rating = $request->rating;
        $productReview->save();
        
        toastr('Đã đánh giá sản phẩm', 'success', 'success');
        return redirect()->back();
    }
}
