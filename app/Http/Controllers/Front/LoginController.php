<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function login()
    {
        return view('Front.pages.user.login');
    }

    public function StoreLogin(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required|digits:11',
            'password' => 'required|min:6',
        ], [
            'mobile.required' => 'موبایل الزامی است',
            'mobile.digits' => 'موبایل باید 11 رقم باشد',
            'password.required' => 'رمز الزامی است',
            'password.min' => 'رمز حداقل باید 6 حرف باشد',
        ]);
        $data = User::where('mobile', $request->mobile)->get();
        if ($data->isEmpty()) {
            return back()->with('success', true)->with('message', 'اطلاعات وارد شده صحیح نمی باشد');
        } else {
            if ($data[0]->password != $request->password) {
                return back()->with('success', true)->with('message', 'اطلاعات وارد شده صحیح نمی باشد');
            } else {
                if ($data[0]->status == "غیرفعال") {
                    $randomNumber = mt_rand(10000, 99999);
                    User::where('id', $data[0]->id)->update([
                        'code' => "$randomNumber"
                    ]);
                    Session::put('mobile', $data[0]->mobile);
                    return Redirect::route('verify_phone_number');
                } else {
                    Auth::loginUsingId($data[0]->id, true);
                    return Redirect::route('home');
                }
            }
        }
    }


    public function password_forgot()
    {
        return view('Front.pages.user.password_forgot');
    }

    public function SendPassword(Request $request)
    {
        $this->validate($request, [
            'mobile' => 'required|digits:11',
        ], [
            'mobile.required' => 'وارد کردن موبایل الزامی است',
            'mobile.digits' => 'موبایل باید 11 رقم باشد',
        ]);
        $data = User::where('mobile', $request->mobile)->get();
        if ($data->isEmpty()) {
            return back()->with('success', true)->with('message', 'اطلاعات وارد شده صحیح نمی باشد');
        } else {
            $randomNumber = mt_rand(100000, 999999);

            User::where('id', $data[0]->id)->update([
                'password' => $randomNumber
            ]);
            return back()->with('success', true)->with('message', 'رمز جدید برای شما ارسال شد');
        }
    }

}
