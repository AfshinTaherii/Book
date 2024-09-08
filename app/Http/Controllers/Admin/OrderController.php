<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class OrderController extends Controller
{
    public function wait()
    {
        return view('Admin.pages.order.wait');
    }

    public function send()
    {
        return view('Admin.pages.order.send');
    }

    public function notSubmit()
    {
        return view('Admin.pages.order.notSubmit');
    }

    public function waitAjax()
    {
        $carts = Cart::where('status', 'سفارش داده شد')->get();
        $carta = [];
        foreach ($carts as $cart) {
            $totalPrice = 0;
            $shopData = Shops::where('cartId', $cart->id)->get();
            foreach ($shopData as $item) {
                $totalPrice = $totalPrice + $item->totalPrice;
            }

            $userData = User::find($cart->userId);
            /*$address = Address::find($cart->addressId);*/
            $date = Verta($cart->updated_at);
            $result = (object)[
                'id' => $cart->id,
                'status' => $cart->status,
                'trackingCode' => $cart->trackingCode,
                'user' => $userData->name . ' ' . $userData->family,
                /*'address' => $address,*/
                'price' => $totalPrice,
                'numbers' => count($shopData),
                'date' => "$date->year-$date->month-$date->day",
                'hource' => "$date->hour:$date->minute",
                'paymentType' => $cart->paymentType,
            ];
            if ($totalPrice > 0 and count($shopData) > 0) {
                array_push($carta, $result);
            }

        }
        return Datatables::of($carta)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('sendOrderr', $row->id) . '" class="success"><i class="fa fa-check"></i></i></a>
<a href="' . route('seeOrder', $row->id) . '" class="alert"><i class="fa fa-eye"></i></i></a>
<a href="' . route('deleteOrder', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function sendAjax()
    {
        $carts = Cart::where('status', 'ارسال شده')->get();
        $carta = [];
        foreach ($carts as $cart) {
            $totalPrice = 0;
            $shopData = Shops::where('cartId', $cart->id)->get();
            foreach ($shopData as $item) {
                $totalPrice = $totalPrice + $item->totalPrice;
            }

            $userData = User::find($cart->userId);
            $date = Verta($cart->updated_at);
            $result = (object)[
                'id' => $cart->id,
                'status' => $cart->status,
                'trackingCode' => $cart->trackingCode,
                'user' => $userData->name . ' ' . $userData->family,
                /*'address' => $address,*/
                'price' => $totalPrice,
                'numbers' => count($shopData),
                'date' => "$date->year-$date->month-$date->day",
                'hource' => "$date->hour:$date->minute",
            ];
            if ($totalPrice > 0 and count($shopData) > 0) {
                array_push($carta, $result);
            }
        }
        return Datatables::of($carta)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('seeOrder', $row->id) . '" class="alert"><i class="fa fa-eye"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function notSubmitAjax()
    {
        $carts = Cart::where('status', 'باز')->get();
        $carta = [];
        foreach ($carts as $cart) {
            $totalPrice = 0;
            $shopData = Shops::where('cartId', $cart->id)->get();
            foreach ($shopData as $item) {
                $totalPrice = $totalPrice + $item->totalPrice;
            }

            $userData = User::find($cart->userId);
            /*$address = Address::find($cart->addressId);*/
            $date = Verta($cart->updated_at);
            $result = (object)[
                'id' => $cart->id,
                'status' => $cart->status,
                'trackingCode' => $cart->trackingCode,
                'user' => $userData->name . ' ' . $userData->family,
                /*'address' => $address,*/
                'price' => $totalPrice,
                'numbers' => count($shopData),
                'date' => "$date->year-$date->month-$date->day",
                'hource' => "$date->hour:$date->minute",
            ];
            if ($totalPrice > 0 and count($shopData) > 0) {
                array_push($carta, $result);
            }
        }
        return Datatables::of($carta)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('seeOrder', $row->id) . '" class="alert"><i class="fa fa-eye"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }


    public function deleteOrder($id)
    {
        Shops::where('cartId', $id)->delete();
        Cart::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت حذف شد');
    }

    public function seeOrder($id)
    {
        $shops = Shops::where('cartId', $id)->get();
        $carts = Cart::find($id);
        $persianDate = Verta($carts->updated_at);
        $resultTime = $persianDate->year . '/' . $persianDate->month . '/' . $persianDate->day;
        $address = Address::withTrashed()->find($carts->addressId);

        $province = Province::find($address->provincesId)->title;
        $city = City::find($address->cityId)->title;
        $totalAddress = "$province , $city";
        $totalAddress = $totalAddress . " ، پلاک: " . $address->plaque . " ، واحد: " . $address->unit . " ، کدپستی: " . $address->postalCode;
        $totalOffPrice = 0;
        $total = 0;
        $shop = [];
        foreach ($shops as $item) {
            $totals = $item->price * $item->number;
            $total = $total + $totals;
            $totalOffPrices = ($item->price - $item->offPrice) * $item->number;
            $totalOffPrice = $totalOffPrice + $totalOffPrices;
            $product = Product::find($item->productId);
            $result = (object)[
                'id' => $item->id,
                'productId' => $product->title,
                'price' => $item->price,
                'offPrice' => $item->offPrice,
                'totalPrice' => $item->totalPrice,
                'number' => $item->number,
            ];
            array_push($shop, $result);
        }
        return view('Admin.pages.order.factor', compact('address', 'carts', 'shop', 'address', 'totalAddress','totalOffPrice','total','resultTime'));
    }

    public function sendOrder($id)
    {
        Cart::where('id', $id)->update([
            'status' => 'ارسال شده'
        ]);
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }
}
