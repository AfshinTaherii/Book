<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Product;
use App\Models\Admin\ProductGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    public function add()
    {
        $Category = Category::all();

        return view('Admin.pages.product.add', compact('Category'));
    }

    public function listt()
    {
        return view('Admin.pages.product.list');
    }


    public function ajax()
    {

        $data = Product::all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteProduct', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateProduct', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
            'categoryId' => 'required',
            'priceBook' => 'required',
            'descriptionFa' => 'required',
            'descriptionEn' => 'required',
            'seoKeyword' => 'required',
            'seoDescription' => 'required',

        ], [
            'titleFa.required' => 'عنوان فارسی الزامی است',
            'titleEn.required' => 'عنوان انگلیسی الزامی است',
            'categoryId.required' => 'انتخاب دسته بندی الزامی است',
            'priceBook.required' => 'قیمت الزامی است',
            'descriptionFa.required' => 'توضیحات فارسی الزامی است',
            'descriptionEn.required' => 'توضیحات انگلیسی الزامی است',
            'seoKeyword.required' => 'توضیحات سئو الزامی است',
            'seoDescription.required' => 'لغات کلیدی سئو الزامی است',
        ]);


        $imageName = rand(11111, 99999) . time() . '.' . request()->cover_image->getClientOriginalExtension();
        request()->cover_image->move(public_path('cover_image'), $imageName);
        $imageAddres = url('/') . '/' . 'cover_image' . '/' . $imageName;

        $offPrice = 0;
        if ($request->offPrice != null){
            $offPrice= $request->offPrice;
        }

        $productId = Product::create([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
            'authorFa' => $request->authorFa,
            'authorEn' => $request->authorEn,
            'publisherFa' => $request->publisherFa,
            'publisherEn' => $request->publisherEn,
            'published_at' => $request->published_at,
            'isbn' => $request->isbn,
            'categoryId' => $request->categoryId,
            'priceBook' => str_replace(',', '', $request->priceBook),
            'offPercent' => $request->offPercent,
            'offPrice' => str_replace(',', '', $offPrice),
            'descriptionEn' => $request->descriptionEn,
            'cover_image' => $imageAddres,
            'seoKeyword' => $request->seoKeyword,
            'seoDescription' => $request->seoDescription,
        ])->id;

        if ($request->sliderImg != null) {
            foreach ($request->sliderImg as $item) {
                if ($item != null) {
                    $imageName = rand(11111, 99999) . time() . '.' . $item->getClientOriginalExtension();
                    $item->move(public_path('productGallery'), $imageName);
                    $imageAddres = url('/') . '/' . 'productGallery' . '/' . $imageName;
                    ProductGallery::create([
                        'productId' => $productId,
                        'image' => $imageAddres,
                    ]);
                }
            }
        }

        return back()->with('success', true)->with('message', 'محصول شما با موفقیت ثبت شد');
    }


    public function delete($id)
    {
        Product::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'محصول شما با موفقیت حذف شد');

    }

    public function update($id)
    {
        $data = Product::find($id);
        $Category = Category::all();

        return view('Admin.pages.product.update', compact('Category','data'));
    }


    public function storeUpdate(Request $request)
    {
        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
            'categoryId' => 'required',
            'priceBook' => 'required',
            'descriptionFa' => 'required',
            'descriptionEn' => 'required',


        ], [
            'titleFa.required' => 'عنوان فارسی الزامی است',
            'titleEn.required' => 'عنوان انگلیسی الزامی است',
            'categoryId.required' => 'انتخاب دسته بندی الزامی است',
            'priceBook.required' => 'قیمت الزامی است',
            'descriptionFa.required' => 'توضیحات فارسی الزامی است',
            'descriptionEn.required' => 'توضیحات انگلیسی الزامی است',

        ]);

        $imageAddres = Product::find($request->id)->cover_image;
        if ($request->cover_image != null) {
            $urll = url('/') . '/';

            $imagePath = str_replace($urll, '', $imageAddres);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $imageName = rand(11111, 99999) . time() . '.' . request()->cover_image->getClientOriginalExtension();
            request()->cover_image->move(public_path('cover_image'), $imageName);
            $imageAddres = url('/') . '/' . 'cover_image' . '/' . $imageName;
        }


        $offPrice = 0;
        if ($request->offPrice != null){
            $offPrice= $request->offPrice;
        }


        Product::where('id', $request->id)->update([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
            'authorFa' => $request->authorFa,
            'authorEn' => $request->authorEn,
            'publisherFa' => $request->publisherFa,
            'publisherEn' => $request->publisherEn,
            'published_at' => $request->published_at,
            'isbn' => $request->isbn,
            'categoryId' => $request->categoryId,
            'priceBook' => str_replace(',', '', $request->priceBook),
            'offPercent' => $request->offPercent,
            'offPrice' => str_replace(',', '', $offPrice),
            'descriptionFa' => $request->descriptionFa,
            'descriptionEn' => $request->descriptionEn,
            'cover_image' => $imageAddres,
        ]);

        if ($request->sliderImg != null) {
            foreach ($request->sliderImg as $item) {
                if ($item != null) {
                    $imageName = rand(11111, 99999) . time() . '.' . $item->getClientOriginalExtension();
                    $item->move(public_path('productGallery'), $imageName);
                    $imageAddres = url('/') . '/' . 'productGallery' . '/' . $imageName;
                    ProductGallery::create([
                        'productId' => $request->id,
                        'image' => $imageAddres,
                    ]);
                }
            }
        }
        return back()->with('success', true)->with('message', 'محصول شما با موفقیت ویرایش شد');
    }
}
