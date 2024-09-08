<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Province;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CityController extends Controller
{
    public function add()
    {
        $province = Province::all();
        return view('Admin.pages.city.add',compact('province'));
    }


    public function listt()
    {
        return view('Admin.pages.city.list');
    }

    public function ajax()
    {
        $datas = City::all();
        $data=[];
        foreach ($datas as $item){
            $province = Province::find($item->provincesId);
            $result = (object)[
                'id'=>$item->id,
                'provincesId'=>$province->titleFa,
                'titleFa'=>$item->titleFa,
            ];
            array_push($data,$result);
        }
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteCity', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateCity', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        City::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت حذف شد');

    }

    public function update($id)
    {
        $City = City::find($id);
        $province = Province::all();
        return view('Admin.pages.city.update', compact('City','province'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'province' => 'required',
            'titleFa' => 'required',
            'titleEn' => 'required',
        ], [
            'province.required' => 'انتخاب نام استان الزامی است',
            'titleFa.required' => 'نام شهر فارسی الزامی است',
            'titleEn.required' => 'نام شهر انگلیسی الزامی است',
        ]);


        City::create([
            'provincesId' => $request->province,
            'titleFa' => $request->titleFa,
        ]);

        return back()->with('success', true)->with('message', 'شهر شما با موفقیت ثبت شد');
    }

    public function storeUpdate(Request $request)
    {

        $this->validate($request, [
            'province' => 'required',
            'titleFa' => 'required',
            'titleEn' => 'required',
        ], [
            'province.required' => 'انتخاب نام استان الزامی است',
            'titleFa.required' => 'نام شهر فارسی الزامی است',
            'titleEn.required' => 'نام شهر انگلیسی الزامی است',
        ]);


        City::where('id', $request->id)->update([
            'provincesId' => $request->province,
            'titleFa' => $request->titleFa
        ]);

        return back()->with('success', true)->with('message', 'شهر شما با موفقیت ویرایش شد');
    }
}
