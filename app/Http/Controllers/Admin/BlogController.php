<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class BlogController extends Controller
{
    public function add()
    {
        return view('Admin.pages.blog.add');
    }


    public function listt()
    {
        return view('Admin.pages.blog.list');
    }

    public function ajax()
    {

        $data = Blog::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteBlog', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateBlog', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        Blog::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $data = Blog::find($id);
        return view('Admin.pages.blog.update', compact('data'));


    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
            'longDescriptionFa' => 'required',
            'longDescriptionEn' => 'required',
            'shortDescriptionFa' => 'required',
            'shortDescriptionEn' => 'required',
            'seoDescription' => 'required',
            'seoKeyboard' => 'required',

        ], [
            'titleFa.required' => 'عنوان  فارسی الزامی است',
            'titleEn.required' => 'عنوان انگلیسی الزامی است',
            'longDescriptionFa.required' => 'توضیحات بلند فارسی الزامی است',
            'longDescriptionEn.required' => 'توضیحات بلند انگلیسی الزامی است',
            'shortDescriptionFa.required' => 'توضیحات کوتاه فارسی الزامی است',
            'shortDescriptionEn.required' => 'توضیحات کوتاه انگلیسی الزامی است',
            'seoDescription.required' => 'توضیحات سئو الزامی است',
            'seoKeyboard.required' => 'لغات کلیدی سئو الزامی است',

        ]);

        $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('blogImage'), $imageName);
        $imageAddres = url('/') . '/' . 'blogImage' . '/' . $imageName;


        Blog::create([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
            'image' => $imageAddres,
            'shortDescriptionFa' => $request->shortDescriptionFa,
            'shortDescriptionEn' => $request->shortDescriptionEn,
            'longDescriptionFa' => $request->longDescriptionFa,
            'longDescriptionEn' => $request->longDescriptionEn,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,

        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

    public function storeUpdate(Request $request)
    {

        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
            'longDescriptionFa' => 'required',
            'longDescriptionEn' => 'required',
            'shortDescriptionFa' => 'required',
            'shortDescriptionEn' => 'required',
            'seoDescription' => 'required',
            'seoKeyboard' => 'required',

        ], [
            'titleFa.required' => 'عنوان  فارسی الزامی است',
            'titleEn.required' => 'عنوان انگلیسی الزامی است',
            'longDescriptionFa.required' => 'توضیحات بلند فارسی الزامی است',
            'longDescriptionEn.required' => 'توضیحات بلند انگلیسی الزامی است',
            'shortDescriptionFa.required' => 'توضیحات کوتاه فارسی الزامی است',
            'shortDescriptionEn.required' => 'توضیحات کوتاه انگلیسی الزامی است',
            'seoDescription.required' => 'توضیحات سئو الزامی است',
            'seoKeyboard.required' => 'لغات کلیدی سئو الزامی است',

        ]);

        $imageAddres = Blog::find($request->id)->image;


        if ($request->image != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('blogImage'), $imageName);
            $imageAddres = url('/') . '/' . 'blogImage' . '/' . $imageName;
        }

        Blog::where('id', $request->id)->update([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
            'image' => $imageAddres,
            'shortDescriptionFa' => $request->shortDescriptionFa,
            'shortDescriptionEn' => $request->shortDescriptionEn,
            'longDescriptionFa' => $request->longDescriptionFa,
            'longDescriptionEn' => $request->longDescriptionEn,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }
}


