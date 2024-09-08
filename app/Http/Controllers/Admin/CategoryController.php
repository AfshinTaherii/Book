<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    public function add()
    {
        return view('Admin.pages.group.add');
    }

    public function listt()
    {
        return view('Admin.pages.group.list');
    }

    public function ajax()
    {

        $data = Category::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteCategory', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateCategory', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        Category::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $data = Category::find($id);
        return view('Admin.pages.group.update', compact('data'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
            'image' => 'required',
            'seoKeyword' => 'required',
            'seoDescription' => 'required',

        ], [
            'titleFa.required' => 'عنوان فارسی الزامی است',
            'titleEn.required' => 'عنوان انگلیسی الزامی است',
            'image.required' => 'عکس الزامی است',
            'seoKeyword.required' => 'توضیحات سئو الزامی است',
            'seoDescription.required' => 'لغات کلیدی سئو الزامی است',
        ]);

        $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
        request()->image->move(public_path('Category'), $imageName);
        $imageAddres = url('/') . '/' . 'Category' . '/' . $imageName;

        Category::create([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
            'image' => $imageAddres,
            'seoKeyword' => $request->seoKeyword,
            'seoDescription' => $request->seoDescription,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

    public function storeUpdate(Request $request)
    {
        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
            'image' => 'required',
            'seoKeyword' => 'required',
            'seoDescription' => 'required',

        ], [
            'titleFa.required' => 'عنوان فارسی الزامی است',
            'titleEn.required' => 'عنوان انگلیسی الزامی است',
            'image.required' => 'عکس الزامی است',
            'seoKeyword.required' => 'توضیحات سئو الزامی است',
            'seoDescription.required' => 'لغات کلیدی سئو الزامی است',
        ]);

        $imageAddres = Category::find($request->id)->image;
        if ($request->image != null){
            $urll = url('/') . '/';

            $imagePath = str_replace($urll, '', $imageAddres);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $imageName = rand(11111, 99999) . time() . '.' . request()->image->getClientOriginalExtension();
            request()->image->move(public_path('Category'), $imageName);
            $imageAddres = url('/') . '/' . 'Category' . '/' . $imageName;
        }
        Category::where('id', $request->id)->update([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
            'image' => $imageAddres,
            'seoKeyword' => $request->seoKeyword,
            'seoDescription' => $request->seoDescription,
        ]);
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }
}
