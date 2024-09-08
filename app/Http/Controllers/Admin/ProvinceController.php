<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Province;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ProvinceController extends Controller
{
    public function add()
    {
        return view('Admin.pages.province.add');
    }


    public function listt()
    {
        return view('Admin.pages.province.list');
    }

    public function ajax()
    {

        $data = Province::latest()->orderBy('id', 'DESC')->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteProvince', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateProvince', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        Province::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت حذف شد');

    }

    public function update($id)
    {
        $Province = Province::find($id);
        return view('Admin.pages.province.update', compact('Province'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
        ], [
            'titleFa.required' => 'نام استان فارسی الزامی است',
            'titleEn.required' => 'نام استان انگلیسی الزامی است',
        ]);


        Province::create([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
        ]);

        return back()->with('success', true)->with('message', 'استان شما با موفقیت ثبت شد');
    }

    public function storeUpdate(Request $request)
    {

        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
        ], [
            'titleFa.required' => 'نام استان فارسی الزامی است',
            'titleEn.required' => 'نام استان انگلیسی الزامی است',
        ]);


        Province::where('id', $request->id)->update([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
        ]);

        return back()->with('success', true)->with('message', 'استان شما با موفقیت ویرایش شد');
    }
}
