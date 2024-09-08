@extends('Admin.father.total')
@section('content')
    <!-- BEGIN: Content-->
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- page users view start -->
        <section class="page-users-view">
            <div class="row">
                <!-- account start -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">حساب</div>
                        </div>
                        <input name="id" value="{{$view->id}}" style="display: none">
                        <div class="card-body">
                            <div class="row">
                                <div class="users-view-image">
                                    <img src="{{$view->imageProfile}}"
                                         class="users-avatar-shadow w-50 rounded mb-2 pr-2 ml-1" alt="avatar">
                                </div>
                                <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                    <table class="w-50">
                                        <tr>
                                            <td class="font-weight-bold">نام</td>
                                            <td>{{$view->name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold pt-1">نام خانوداگی</td>
                                            <td class="pt-1">{{$view->family}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold pt-1">موبایل</td>
                                            <td class="pt-1">{{$view->mobile}}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12 col-md-12 col-lg-4">
                                    <table class="ml-0 ml-sm-0 ml-lg-0 w-50">
                                        <tr>
                                            <td class="font-weight-bold">وضعیت</td>
                                            <td>{{$view->status}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold pt-1">نقش</td>
                                            <td class="pt-1">{{$roleData}}</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12"><a href="{{route('updateUser',$view->id)}}" class="btn btn-primary mr-1"><i
                                            class="feather icon-edit-1"></i>ویرایش </a>
                                    <button class="btn btn-outline-danger"><i class="feather icon-trash-2"></i> حذف
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- account end -->
            </div>
        </section>
        <!-- page users view end -->
    </div>
    <!-- END: Content-->
@endsection
