<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class SliderController extends Controller
{
    public function add()
    {
        return view('Admin.pages.slider.add');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required',
        ], [
            'image.required' => 'عکس الزامی است',
        ]);

        $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('slider'), $imageName);
        $imageAddres = url('/') . '/' . 'slider' . '/' . $imageName;


        Slider::create([
            'image' => $imageAddres,
        ]);

        return back()->with('success', true)->with('message', 'اسلایدر با موفقیت ثبت شد');
    }


    public function listt()
    {
        return view('Admin.pages.slider.list');
    }

    public function ajax()
    {
        $data = Slider::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteSlider', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateSlider', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->addColumn('image', function ($row) {

                $image = '<img src="' . $row->image . '" style="width: 100px;">';

                return $image;

            })
            ->rawColumns(['action','image'])
            ->make(true);
    }

    public function update($id)
    {
        $data = Slider::find($id);

        return view('Admin.pages.slider.update', compact('data'));
    }


    public function storeUpdate(Request $request)
    {

        $this->validate($request, [
            'image' => 'required',
        ], [
            'image.required' => 'عکس الزامی است',
        ]);


        $imageAddres = Slider::find($request->id)->image;
        if ($request->image != null) {
            $urll = url('/') . '/';

            $imagePath = str_replace($urll, '', $imageAddres);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('slider'), $imageName);
            $imageAddres = url('/') . '/' . 'slider' . '/' . $imageName;
        }



        Slider::where('id', $request->id)->update([
            'image' => $imageAddres
        ]);

        return back()->with('success', true)->with('message', 'اسلایدر با موفقیت ویرایش شد');
    }


    public function delete($id)
    {
        Slider::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'اسلایدر با موفقیت حذف شد');
    }
}
