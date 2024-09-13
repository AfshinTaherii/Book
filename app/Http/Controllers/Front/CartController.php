<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Admin\OrderItem;
use App\Models\Admin\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function updateCart(Request $request)
    {
        $quantitys = $request->quantity;
        $ids = $request->id;

        foreach ($quantitys as $i => $id) {
            $orderItem = OrderItem::find($ids[$i]);

            $product = Product::find($orderItem->product_id);

            $price = $product->priceBook;
            if ($product->offPrice != 0 && $product->offPrice != $product->priceBook && $product->offPrice != null) {
                $price = $product->offPrice;
            }

            $orderItem->update([
                'quantity' => $quantitys[$i],
                'price' => $price * $quantitys[$i],
            ]);
        }

        return back()->with('success', true)->with('message', 'سبد خرید شما با موفقیت ویرایش شد');

    }
}
