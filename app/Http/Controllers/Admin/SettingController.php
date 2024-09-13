<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function add()
    {
        return view('Admin.pages.public.setting');
    }




    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'عنوان الزامی است',
        ]);

        $imageNameBanner1 = rand(11111, 99999) . time() . '.' . request()->banner1->getClientOriginalExtension();
        request()->banner1->move(public_path('banner1'), $imageNameBanner1);
        $imageAddresBanner1 = url('/') . '/' . 'banner1' . '/' . $imageNameBanner1;

        $imageNameBanner2 = rand(11111, 99999) . time() . '.' . request()->banner2->getClientOriginalExtension();
        request()->banner2->move(public_path('banner2'), $imageNameBanner2);
        $imageAddresBanner2 = url('/') . '/' . 'banner2' . '/' . $imageNameBanner2;

        $imageNameBanner3 = rand(11111, 99999) . time() . '.' . request()->banner3->getClientOriginalExtension();
        request()->banner3->move(public_path('banner3'), $imageNameBanner3);
        $imageAddresBanner3 = url('/') . '/' . 'banner3' . '/' . $imageNameBanner3;

        $imageNameBanner4 = rand(11111, 99999) . time() . '.' . request()->banner4->getClientOriginalExtension();
        request()->banner4->move(public_path('banner4'), $imageNameBanner4);
        $imageAddresBanner4 = url('/') . '/' . 'banner4' . '/' . $imageNameBanner4;

        $imageNameBanner5 = rand(11111, 99999) . time() . '.' . request()->banner5->getClientOriginalExtension();
        request()->banner5->move(public_path('banner5'), $imageNameBanner5);
        $imageAddresBanner5 = url('/') . '/' . 'banner5' . '/' . $imageNameBanner5;

        $imageNameLogo = rand(11111, 99999) . time() . '.' . request()->logo->getClientOriginalExtension();
        request()->logo->move(public_path('logo'), $imageNameLogo);
        $imageLogo = url('/') . '/' . 'logo' . '/' . $imageNameLogo;

        $imageNameIcon = rand(11111, 99999) . time() . '.' . request()->icon->getClientOriginalExtension();
        request()->icon->move(public_path('icon'), $imageNameIcon);
        $imageIcon = url('/') . '/' . 'icon' . '/' . $imageNameIcon;


        Setting::create([
            'title' => $request->title,
            'banner1' => $imageAddresBanner1,
            'banner2' => $imageAddresBanner2,
            'banner3' => $imageAddresBanner3,
            'banner4' => $imageAddresBanner4,
            'banner5' => $imageAddresBanner5,
            'logo' => $imageLogo,
            'icon' => $imageIcon,
            'Description' => $request->Description,

        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

}
