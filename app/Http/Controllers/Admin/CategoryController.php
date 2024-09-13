<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Admin\Comment;
use App\Models\Admin\Order;
use App\Models\Admin\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function productList($slug)
    {

        $group = Category::where('slug', $slug)->firstOrFail();
        $groupId = $group->id;
        $title = $group->titleFa;

        $products = Product::where('categoryId', $groupId)->get();

        $data = [];

        foreach ($products as $item) {
            $available = $item->available > 0;

            $result = (object)[
                'id' => $item->id,
                'titleFa' => $item->titleFa,
                'available' => $available,
                'slug' => $item->slug,
                'priceBook' => $item->priceBook,
                'offPercent' => $item->offPercent,
                'offPrice' => $item->offPrice,
                'cover_image' => $item->cover_image,
            ];

            $data[] = $result;
        }

        return view('Front.pages.product.product', compact('products', 'title', 'data'));

    }


    public function ProductSingle($slug)
    {
        $data = Product::where('slug', $slug)->get();
        $storage = Storage::where('productId', $data[0]->id)->where('status', 'Enable')->orderBy('id')->get()->first();
        $title = Product::where('slug', $slug)->get()->first()->title;
        $product = Product::where('slug', $slug)->get();

        $product = $product[0];
        $number = 1;
        if (Auth::check()) {
            $cartData = Cart::where('userId', Auth::id())->where('status', 'wait')->where('productId', $product->id)->get();
            if (!$cartData->isEmpty()) {
                $number = $cartData[0]->amount;
            }
        }

        return view('Front.pages.product.Single_Product', compact('product', 'number', 'title', 'storage'));
    }

    public function showProduct($slug)
    {
        $product = Product::where('slug', $slug)->first();

        if (!$product) {
            abort(404, 'Product not found');
        }

        $title = $product->titleFa;
        $coverImage = $product->cover_image;


        // مقدار پیش‌فرض برای تعداد محصول
        $number = 1;

//        $reviews = Comment::where('product_id', $product->id)->where('is_approved', true)->get();

        $relatedProducts = Product::where('categoryId', $product->categoryId)->where('id', '!=', $product->id)->take(4)->get();

        if (Auth::check()) {
            $orderData = Order::where('user_id', Auth::id())->where('status', 'pending')->first();

//            return $orderData;

            if ($orderData) {
                $orderItem = $orderData->orderItems()->where('product_id', $product->id)->first();

                if ($orderItem) {
                    $number = $orderItem->quantity;
                }
            }
        }

        $data = (object) [
            'product' => $product,
            'titleFa' => $title,
            'number' => $number,
//            'reviews' => $reviews,
            'relatedProducts' => $relatedProducts,
            'priceBook' => $product->priceBook,
            'descriptionFa' => $product->descriptionFa,
            'descriptionEn' => $product->descriptionEn,
            'language' => $product->language,
            'authorFa' => $product->authorFa,
            'publisherFa' => $product->publisherFa,
            'pages' => $product->pages,
            'cover_image' => $coverImage,
            'published_at' => $product->published_at,
            'isbn' => $product->isbn,
            'offPrice' => $product->offPrice,
            'offPercent' => $product->offPercent,
        ];



        return view('Front.pages.product.Single_Product',compact('data'));
    }


}
