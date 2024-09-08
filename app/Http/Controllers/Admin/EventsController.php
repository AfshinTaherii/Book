<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Events;
use App\Models\Front\Registrations;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Hekmatinasser\Verta\Verta;


class EventsController extends Controller
{
    public function add()
    {
        return view('Admin.pages.event.add');
    }


    public function listt()
    {
        return view('Admin.pages.event.list');
    }

    public function sendAjax()
    {
        $registers = Registrations::where('status', 'pending')->get();
        $registerEvent = [];
        foreach ($registers as $register) {
            $EventData = Events::find($register->event_id);
            $userData = User::find($register->user_id);
            $date = Verta($register->created_at);
            $result = (object)[
                'id' => $register->id,
                'status' => $register->status,
                'phone' => $userData->phone,
                'titleFa' => $EventData->titleFa,
                'user' => $userData->name . ' ' . $userData->family,
                'date' => "$date->year-$date->month-$date->day",
            ];

                array_push($registerEvent, $result);

        }
        return Datatables::of($registerEvent)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('SeeRegisterEvent', $row->id) . '" class="alert"><i class="fa fa-eye"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
    }

    public function eventConfirm($id)
    {
        Registrations::where('id', $id)->update([
            'status' => 'confirmed'
        ]);
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

    public function ajax()
    {

        $data = Events::latest()->get();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {

                $btn = '<a href="' . route('deleteEvent', $row->id) . '" class="danger"><i class="fa fa-trash"></i></a>
<a href="' . route('updateEvent', $row->id) . '" class="success"><i class="fa fa-edit"></i></i></a>';

                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);

    }

    public function delete($id)
    {
        Events::where('id', $id)->delete();
        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');

    }

    public function update($id)
    {
        $data = Events::find($id);
        return view('Admin.pages.event.update', compact('data'));


    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
            'descriptionFa' => 'required',
            'descriptionEn' => 'required',
            'seoDescription' => 'required',
            'seoKeyboard' => 'required',
            'start_time' => 'required',

        ], [
            'titleFa.required' => 'عنوان  فارسی الزامی است',
            'titleEn.required' => 'عنوان انگلیسی الزامی است',
            'descriptionFa.required' => 'توضیحات فارسی الزامی است',
            'descriptionEn.required' => 'توضیحات انگلیسی الزامی است',
            'seoDescription.required' => 'توضیحات سئو الزامی است',
            'seoKeyboard.required' => 'لغات کلیدی سئو الزامی است',
            'start_time.required' => 'زمان شروع رویداد الزامی است',
        ]);




        Events::create([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
            'descriptionFa' => $request->descriptionFa,
            'descriptionEn' => $request->descriptionEn,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'organizer_id' => Auth::id(),
            'locationFa' => $request->locationFa,
            'locationEn' => $request->locationEn,

        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }

    public function storeUpdate(Request $request)
    {

        $this->validate($request, [
            'titleFa' => 'required',
            'titleEn' => 'required',
            'descriptionFa' => 'required',
            'descriptionEn' => 'required',
            'seoDescription' => 'required',
            'seoKeyboard' => 'required',
            'start_time' => 'required',

        ], [
            'titleFa.required' => 'عنوان  فارسی الزامی است',
            'titleEn.required' => 'عنوان انگلیسی الزامی است',
            'descriptionFa.required' => 'توضیحات فارسی الزامی است',
            'descriptionEn.required' => 'توضیحات انگلیسی الزامی است',
            'seoDescription.required' => 'توضیحات سئو الزامی است',
            'seoKeyboard.required' => 'لغات کلیدی سئو الزامی است',
            'start_time.required' => 'زمان شروع رویداد الزامی است',
        ]);



        Events::where('id', $request->id)->update([
            'titleFa' => $request->titleFa,
            'titleEn' => $request->titleEn,
            'descriptionFa' => $request->descriptionFa,
            'descriptionEn' => $request->descriptionEn,
            'seoDescription' => $request->seoDescription,
            'seoKeyboard' => $request->seoKeyboard,
            'start_time' => $request->start_time,
            'end_time' => $request->end_time,
            'organizer_id' => Auth::id(),
            'locationFa' => $request->locationFa,
            'locationEn' => $request->locationEn,
        ]);

        return back()->with('success', true)->with('message', 'درخواست شما با موفقیت ثبت شد');
    }
}
