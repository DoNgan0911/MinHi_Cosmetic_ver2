<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Feedback;

use Illuminate\Http\Request;

class DetailProductController extends Controller
{
    public function index()
    {
        return view('customer.shop_product.detail-product');
    }

    public function create()
    {
        // ...
    }

    public function store (Request  $request, $productId)
    {
        $request->validate([
            'name' => 'required|string',
            'phone' => ['required', 'string', 'regex:/^[0-9]{10}$/'],
            'review' => 'required|string',
            'stars' => 'required|integer|min:1|max:5',
        ]);

        $feedback = new Feedback;
        $feedback->idProduct = $productId;
        $feedback->idUser = 1;
        $feedback->name = $request->input('name');
        $feedback->phone = $request->input('phone');
        $feedback->desc = $request->input('feedback');
        $feedback->point = $request->input('stars');
        $feedback->save();

        return redirect()->back()->with('success', 'Đánh giá của bạn đã được gửi thành công.');
    }

    public function show($id)
    {
        $product = Product::find($id);

        $feedbacks = Feedback::where('product_id', $id)->get();
        $totalComments = $feedbacks->count();
        return view('customer.shop_product.detail-product',[
            'product' => $product,
            'feedbacks' => $feedbacks,
            'totalComments' => $totalComments
        ]); 
    }

    public function edit($id)
    {
        // ...
    }

    public function update($id)
    {
        // ...
    }

    public function destroy($id)
    {
        // ...
    }
}
