<?php

namespace App\Http\Controllers;

use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use App\Models\Admin\Order;
use App\Models\Admin\OrderItem;
use App\Models\Admin\Product;
use App\Models\Admin\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $user = User::query()->first();
        Auth::loginUsingId($user->id);
        //$this->middleware('auth');
    }

    public function index()
    {
        $slider = Slider::all();
        $product = Product::all();
        $blog = Blog::all();
        $group = Category::all();
        return view('Front.pages.public.index', compact('slider', 'product', 'blog','group'));
    }



    public function addToBasket($id)
    {
        $product = Product::query()->find($id);
        $pendingOrder = Order::query()->where('status', 'pending')->where('user_id', Auth::id())->first();
        if (!$pendingOrder) {
            $pendingOrder = Order::query()->create([
                'user_id' => Auth::id(),
                'total_price' => 0,
                'status' => 'pending'
            ]);
        }

        $bookPrice = $product->offPrice ? $product->offPrice : $product->priceBook;
        $hasItem = OrderItem::query()->where('order_id', $pendingOrder->id)->where('product_id', $id)->first();
        if (!$hasItem) {
            OrderItem::query()->create([
                'order_id' => $pendingOrder->id,
                'product_id' => $id,
                'quantity' => 1,
                'price' => $bookPrice,
            ]);
            $pendingOrder->total_price = $bookPrice;
            $pendingOrder->save();
        } else {
            $currentQuantity = $hasItem->quantity;
            $quantity = $currentQuantity + 1;
            $hasItem->quantity = $quantity;
            $hasItem->price = $bookPrice*$quantity;
            $hasItem->save();

            $pendingOrder->total_price = $bookPrice*$quantity;
            $pendingOrder->save();
        }

        return back()->with('success',true)->with('message',"با موفقیت به سید خرید اضافه شد");
    }

    public function shopBasket()
    {
        $data = [];
        $totalPrice = 0;
        $pendingOrder = Order::query()->where('status', 'pending')->where('user_id', Auth::id())->first();
        if ($pendingOrder){
            $orders = OrderItem::query()->where('order_id', $pendingOrder->id)->get();
            foreach ($orders as $idex=>$order) {
                $product = Product::query()->find($order->product_id);
                $result = (object)[
                    'cover_image'=>$product->cover_image,
                    'titleFa'=>$product->titleFa,
                    'priceBook'=>$product->offPrice ? $product->offPrice : $product->priceBook,
                    'amount'=>$order->quantity,
                    'id'=>$order->id,
                    'totalPrice'=>$order->price,
                ];
                $data[] = $result;
                $totalPrice += $order->price;
            }
        }
        return view('Front.pages.cart.cart',compact('data','totalPrice'));
    }

    public function deleteCart($id)
    {
        OrderItem::query()->where('id', $id)->delete();
        return back()->with('success',true)->with('message','با موفقیت حذف شد');
    }

    public function updateCart(Request $request)
    {
        $ids = $request->id;
        $quantitys = $request->quantity;
        $totalPrice = 0;

        foreach ($ids as $index=>$id) {
            $item = OrderItem::query()->find($id);
            $product = Product::query()->find($item?->product_id);
            $bookPrice = $product->offPrice ? $product->offPrice : $product->priceBook;
            OrderItem::query()->where('id', $id)->update([
                'quantity' => $quantitys[$index],
                'price'=>$bookPrice*$quantitys[$index],
            ]);
            $totalPrice += $bookPrice*$quantitys[$index];

            Order::query()->where('id', $item->order_id)->update([
                'total_price'=>$totalPrice,
            ]);
        }

        return back()->with('success',true)->with('message','با موفقیت به روز رسانی شد');
    }
}
