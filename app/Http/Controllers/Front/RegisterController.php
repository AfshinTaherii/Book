<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register()
    {
        return view('Front.pages.user.register');
    }


    public function StoreUser(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'family' => 'required',
            'mobile' => 'required|digits:11',
            'password' => 'required|min:6',
            'repeat' => 'required',
        ], [
            'name.required' => 'نام الزامی است',
            'family.required' => 'فامیل الزامی است',
            'mobile.required' => 'شماره موبایل الزامی است',
            'mobile.digits' => 'شماره موبایل باید 11 رقم باشد',
            'password.required' => 'رمز الزامی است',
            'password.min' => 'رمز حداقل باید 6 حرف باشد',
            'repeat.required' => 'تکرار رمز الزامی است',
        ]);
        if ($request->repeat != $request->password) {

            return back()->with('success', true)->with('message', 'رمز و تکرار رمز یکسان نمی باشد');

        }
        $data = User::where('mobile', $request->mobile)->get();
        if ($data->isEmpty()) {
            $randomNumber = mt_rand(10000, 99999);
            User::create([
                'name' => $request->name,
                'family' => $request->family,
                'mobile' => $request->mobile,
                'password' => $request->password,
                'code' => $randomNumber,
                'status' => 'غیرفعال'
            ]);


            Session::put('mobile', $request->mobile);
            return Redirect::route('verify_phone_number');

        } else {
            return back()->with('success', true)->with('message', 'شما قبلا ثبت نام کرده اید');
        }
    }


    public function verify_phone_number()
    {
        return view('Front.pages.user.verify_phone_number');
    }

    public function CheckCode(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
        ], [
            'code.required' => ' وارد کردن کد الزامی است',
        ]);

        $mobile = Session::get('mobile');
        $data = User::where('mobile', $mobile)->get();
        if ($request->code == $data[0]->code) {
            User::where('mobile', $mobile)->update([
                'status' => 'فعال'
            ]);
            Auth::loginUsingId($data[0]->id,true);
            return Redirect::route('home');
        } else {
            return back()->with('error', true)->with('message', 'کد شما اشتباه است');
        }
    }
}
