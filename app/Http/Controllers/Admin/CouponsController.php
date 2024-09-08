<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Coupons;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CouponsController extends Controller
{
    public function add()
    {
        return view('Admin.pages.coupon.add');
    }


    public function listt()
    {
        return view('Admin.pages.coupon.list');
    }

    public function ajax()
    {

        $data = Coupons::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteCoupon', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateCoupon', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        Coupons::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $data = Coupons::find($id);
        return view('Admin.pages.coupon.update', compact('data'));


    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'code' => 'required',
            'discount' => 'required',
            'start_time' => 'required',

        ], [
            'code.required' => 'کد تخفیف الزامی است',
            'discount.required' => 'مقدار تخفیف الزامی است',
            'start_time.required' => 'زمان شروع تخفیف الزامی است',

        ]);


        Coupons::create([
            'code' => $request->code,
            'discount' => $request->discount,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

    public function storeUpdate(Request $request)
    {

        $this->validate($request, [
            'code' => 'required',
            'discount' => 'required',
            'start_time' => 'required',

        ], [
            'code.required' => 'کد تخفیف الزامی است',
            'discount.required' => 'مقدار تخفیف الزامی است',
            'start_time.required' => 'زمان شروع تخفیف الزامی است',
        ]);




        Coupons::where('id', $request->id)->update([
            'code' => $request->code,
            'discount' => $request->discount,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }
}
