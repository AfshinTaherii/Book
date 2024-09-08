<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('Admin.pages.public.index');
    }

    public function add()
    {
        $rollList = Role::all();

        return view('Admin.pages.user.add', compact('rollList'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'family' => 'required',
            'mobile' => 'required|digits:11',
            'password' => 'required|min:6',
            'repeat' => 'required',
            'roleId' => 'required',
        ], [
            'name.required' => 'نام الزامی است',
            'family.required' => 'فامیل الزامی است',
            'mobile.required' => 'شماره موبایل الزامی است',
            'mobile.digits' => 'شماره موبایل باید 11 رقم باشد',
            'password.required' => 'رمز الزامی است',
            'password.min' => 'رمز حداقل باید 6 حرف باشد',
            'repeat.required' => 'تکرار رمز الزامی است',
            'roleId.required' => ' انتخاب نقش الزامی است',
        ]);
        if ($request->repeat != $request->password) {

            return back()->with('error', true)->with('message', 'رمز و تکرار رمز یکسان نمی باشد');

        }

        $imageAddres = "";
        if ($request->imageProfile != null) {
            $imageName = rand(11111, 99999) . time() . '.' . request()->imageProfile->getClientOriginalExtension();
            request()->imageProfile->move(public_path('imageProfile'), $imageName);
            $imageAddres = url('/') . '/' . 'imageProfile' . '/' . $imageName;
        }

        $data = User::where('mobile', $request->mobile)->get();
        if ($data->isEmpty()) {
            $randomNumber = mt_rand(10000, 99999);
            User::create([
                'name' => $request->name,
                'family' => $request->family,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'imageProfile' => $imageAddres,
                'roleId' => $request->roleId,
                'password' => $request->password,
                'code' => $randomNumber,
                'status' => 'فعال',
                'gender' => $request->gender,
                'birthDay' => $request->birthDay,
                'api_token' => Str::random(80)
            ]);
            return back()->with('success', true)->with('message', 'کاربر با موفقیت ایجاد شد');


        } else {
            return back()->with('error', true)->with('message', 'شما قبلا ثبت نام کرده اید');
        }
    }


    public function view($id)
    {
        $view = User::find($id);
        $roleData = Role::find($view->roleId)->title;
        return view('Admin.pages.user.view', compact('view', 'roleData'));
    }


    public function update($id)
    {
        $data = User::find($id);
        $rollList = Role::all();
        return view('Admin.pages.user.update', compact('data', 'rollList'));
    }

    public function storeUpdate(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'family' => 'required',
            'roleId' => 'required',
        ], [
            'name.required' => 'نام الزامی است',
            'family.required' => 'فامیل الزامی است',
        ]);

        if ($request->repeat != $request->password) {
            return back()->with('errors', true)->with('message', 'رمز و تکرار رمز یکسان نمی باشد');
        }

        $imageAddres = User::find($request->id)->imageProfile;
        if ($request->imageProfile != null) {
            $urll = url('/') . '/';

            $imagePath = str_replace($urll, '', $imageAddres);
            if (File::exists($imagePath)) {
                File::delete($imagePath);
            }
            $imageName = rand(11111, 99999) . time() . '.' . request()->imageProfile->getClientOriginalExtension();
            request()->imageProfile->move(public_path('imageProfile'), $imageName);
            $imageAddres = url('/') . '/' . 'imageProfile' . '/' . $imageName;
        }

        User::where('id', $request->id)->update([
            'name' => $request->name,
            'family' => $request->family,
            'imageProfile' => $imageAddres,
            'roleId' => $request->roleId,
            'status' => $request->status,
            'gender' => $request->gender,
            'birthDay' => $request->birthDay,
        ]);
        return back()->with('success', true)->with('message', 'کاربر با موفقیت ویرایش شد');
    }


    public function listt()
    {
        return view('Admin.pages.user.list');
    }

    public function ajax()
    {
        $data = [];
        $dates = User::all();
        foreach ($dates as $item) {
            $rollName = Role::find($item->roleId)->title;
            $result = [
                "id" => $item->id,
                "name" => $item->name,
                "family" => $item->family,
                "mobile" => $item->mobile,
                "email" => $item->email,
                "roleId" => $rollName,
            ];
            array_push($data, (object)$result);
        }
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('viewUser', $row->id) . '" class="success"><i class="fa fa-eye"></i></a>
                        <a href="' . route('deleteUser', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return Redirect::route('listUser')->with('success', true)->with('message', 'درخواست شما با موفقیت حذف شد');
    }

}
