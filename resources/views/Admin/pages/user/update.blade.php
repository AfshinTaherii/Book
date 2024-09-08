@extends('Admin.father.total')
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- users add start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab"
                                           data-toggle="tab" href="#account"
                                           aria-controls="account" role="tab" aria-selected="true">
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">ویرایش کاربر</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab"
                                         role="tabpanel">
                                        <!-- users add account form start -->
                                        @if(Session::has('success'))
                                            <div class="alert alert-success">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                    &times;
                                                </button>
                                                <strong></strong> {{ Session::get('message', '') }}
                                            </div>
                                        @endif
                                        @if(Session::has('errors'))
                                            <div class="alert alert-danger">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                    &times;
                                                </button>
                                                <strong></strong> {{ Session::get('message', '') }}
                                            </div>
                                        @endif
                                        @if(count($errors) > 0 )
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <ul class="p-0 m-0" style="list-style: none;">
                                                    @foreach($errors->all() as $error)
                                                        <li>{{$error}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <form action="{{route('storeUpdate')}}" enctype="multipart/form-data" method="post">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>نام</label>
                                                            <input type="text" class="form-control" placeholder="نام" name="name" value="{{$data->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>نام خانوادگی</label>
                                                            <input type="text" class="form-control"
                                                                   placeholder="نام خانوادگی" name="family" value="{{$data->family}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <fieldset class="form-group"><label for="image">انتخاب عکس</label>
                                                                <input type="file" class="form-control" id="image"
                                                                       name="imageProfile"></fieldset>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <label>نقش</label>
                                                        <select class="form-control" name="roleId">
                                                            @foreach($rollList as $item)
                                                                <option value="{{$item->id}}"
                                                                        @if($data->roleId == $item->id)
                                                                        selected
                                                                        @endif>
                                                                    {{$item->titleFa}}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>رمز عبور</label>
                                                        <input type="text" class="form-control" placeholder="رمز عبور" name="password">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>تکرار رمز عبور</label>
                                                        <input type="text" class="form-control" placeholder="تکرار رمز عبور" name="repeat">
                                                    </div>
                                                </div>
                                                <input name="id" value="{{$data->id}}" style="display: none">
                                                <div
                                                    class="col-12 d-flex flex-sm-row flex-column justify-content-center mt-1">
                                                    <button type="submit"
                                                            class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">
                                                        ذخیره
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users add account form ends -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
