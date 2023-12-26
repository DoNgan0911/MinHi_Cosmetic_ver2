<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function index()
    {
        return view('admin.profile.index');
    }
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100'],
            'address' => ['required', 'max:100'],
            'phone' => ['required', 'max:10'],
            'postcode' => ['required', 'max:12'],
            'birthday' => ['required', 'max:100'],
        ]);


        $user = Auth::user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->postcode = $request->postcode;
        $user->birthday = $request->birthday;
        $user->save();
        return redirect()->back();

    }
    
}
