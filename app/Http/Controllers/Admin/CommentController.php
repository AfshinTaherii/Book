<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Comment;
use App\Models\Admin\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CommentController extends Controller
{
    public function listt()
    {
        return view('Admin.pages.comment.show');
    }

    public function ajax()
    {

        $datas = Comment::all();
        $data = [];
        foreach ($datas as $item) {
            $userName = User::find($item->user_id);
            $product = Product::find($item->product_id);
            $result = [
                'id' => $item->id,
                'name' => $userName->name . ' ' . $userName->family,
                'product_id' => $product->titleFa,
                'comment' => $item->comment,
            ];
            array_push($data, (object)$result);
        }
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="#" onclick="adminDescription('.$row->id.')" class="success" data-toggle="modal" data-target="#inlineForm"><i class="fa fa-repeat"></i></a>
<a href="' . route('deleteComments', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function okRequset(Request $request)
    {

        Comment::where('id', $request->id)->update([
            'adminDescription' => $request->adminDescription,
            'status' => 'approved'
        ]);

        return back()->with('success', true)->with('message', 'پاسخ شما با موفقیت ثبت شد');
    }

    public function delete($id)
    {
        Comment::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت حذف شد');

    }
}
