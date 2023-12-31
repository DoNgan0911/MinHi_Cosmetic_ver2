<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\toastr;


class UserProfileController extends Controller
{
    //
    public function index(){
        return view('frontend.dashboard.profile');
    }
    public function updateProfile(Request $request)
    {
        
        $request->validate([
            'name' => ['required', 'max:100'],
            'address' => ['required', 'max:100'],
            'phone' => ['required', 'max:10'],
            'postcode' => ['required', 'max:12'],
            // 'birthday' => ['required', 'max:100'],
            'birthday' => [
                'required', 
                'max:100',
                function ($attribute, $value, $fail) {
                    // Chuyển đổi ngày sinh về định dạng timestamp để so sánh
                    $inputDate = strtotime($value);
                    
                    // Lấy ngày hiện tại
                    $currentDate = strtotime(date('Y-m-d'));
                    
                    // So sánh ngày sinh với ngày hiện tại
                    if ($inputDate > $currentDate) {
                        $fail("Ngày sinh phải bé hơn hoặc bằng ngày hiện tại");
                    }
                },
            ],

        ]);


        $user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->postcode = $request->postcode;
        $user->birthday = $request->birthday;
        $user->save();
        toastr('Đã cập nhật thông tin cá nhân thành công', 'success', 'success');
        return redirect()->back();

    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', 'min:8']
        ]);
        $request->user()->update([
            'password' => bcrypt($request->password)
        ]);

        toastr('Đã cập nhật mật khẩu thành công', 'success', 'success');
        return redirect()->back();
    }
}
