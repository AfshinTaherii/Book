<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class RollController extends Controller
{
    public function add()
    {
        return view('Admin.pages.role.add');
    }


    public function listt()
    {
        return view('Admin.pages.role.list');
    }


    public function ajax()
    {

        $data = Role::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteRoll', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateRoll', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        Role::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'سطح دسترسی شما با موفقیت حذف شد');

    }

    public function update($id)
    {
        $role = Role::find($id);
        return view('Admin.pages.role.update', compact('role'));


    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'وارد کردن عنوان الزامی است',
        ]);

        $users = 0;
        if ($request->users == "on") {
            $users = 1;
        }

        $groups = 0;
        if ($request->groups == "on") {
            $groups = 1;
        }

        $product = 0;
        if ($request->product == "on") {
            $product = 1;
        }


        $slider = 0;
        if ($request->slider == "on") {
            $slider = 1;
        }


        $role = 0;
        if ($request->role == "on") {
            $role = 1;
        }

        $blog = 0;
        if ($request->blog == "on") {
            $blog = 1;
        }

        Role::create([
            'title' => $request->title,
            'users' => $users,
            'groups' => $groups,
            'product' => $product,
            'slider' => $slider,
            'role' => $role,
            'blog' => $blog,
        ]);

        return back()->with('success', true)->with('message', 'سطح دسترسی با موفقیت اضافه شد');

    }

    public function storeUpdate(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
        ], [
            'title.required' => 'وارد کردن عنوان الزامی است',
        ]);

        $users = 0;
        if ($request->users == "on") {
            $users = 1;
        }

        $groups = 0;
        if ($request->groups == "on") {
            $groups = 1;
        }



        $product = 0;
        if ($request->product == "on") {
            $product = 1;
        }


        $slider = 0;
        if ($request->slider == "on") {
            $slider = 1;
        }

        $role = 0;
        if ($request->role == "on") {
            $role = 1;
        }

        $blog = 0;
        if ($request->blog == "on") {
            $blog = 1;
        }




        Role::where('id', $request->id)->update([
            'title' => $request->title,
            'users' => $users,
            'groups' => $groups,
            'product' => $product,
            'slider' => $slider,
            'role' => $role,
            'blog' => $blog,
        ]);

        return back()->with('success', true)->with('message', 'سطح دسترسی شما با موفقیت ویرایش شد');
    }


}
