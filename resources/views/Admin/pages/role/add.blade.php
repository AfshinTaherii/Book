@extends('Admin.father.total')
@section('content')
    @if(Session::has('success'))
        <div class="alert alert-success mt-3">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                &times;
            </button>
            <strong></strong> {{ Session::get('message', '') }}
        </div>
    @endif
    @if(count($errors) > 0 )
        <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
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
    <section class="vuexy-checkbox-color">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <form class="form" method="post" action="{{route('storeRoll')}}">
                        @csrf
                        <div class="card-header" style="border-bottom: #ffffff 1px solid;"><h4 class="card-title mb-2">
                                اضافه کردن سطح دسترسی</h4></div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="col-md-4 col-12 mb-2"><label
                                        for="a">عنوان سطح دسترسی</label> <input type="text"
                                                                                  class="form-control mt-1"
                                                                                  id="a"
                                                                                  placeholder="عنوان سطح دسترسی"
                                                                                  name="title">
                                </div>

                                <div class="col-md-12 col-12">
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success"><input type="checkbox"
                                                                                                        name="users"
                                                                                                        checked>
                                                    <span class="vs-checkbox"> <span class="vs-checkbox--check"> <i
                                                                class="vs-icon feather icon-check"></i> </span> </span>
                                                    <span class="">مدیریت کاربران</span></div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success"><input type="checkbox"
                                                                                                        name="groups"
                                                                                                        checked>
                                                    <span class="vs-checkbox"> <span class="vs-checkbox--check"> <i
                                                                class="vs-icon feather icon-check"></i> </span> </span>
                                                    <span class="">مدیریت گروه ها</span></div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success"><input type="checkbox"
                                                                                                        name="brand"
                                                                                                        checked>
                                                    <span class="vs-checkbox"> <span class="vs-checkbox--check"> <i
                                                                class="vs-icon feather icon-check"></i> </span> </span>
                                                    <span class="">مدیریت برند ها</span></div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success"><input type="checkbox"
                                                                                                        name="product"
                                                                                                        checked>
                                                    <span class="vs-checkbox"> <span class="vs-checkbox--check"> <i
                                                                class="vs-icon feather icon-check"></i> </span> </span>
                                                    <span class="">مدیریت محصولات</span></div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success"><input type="checkbox"
                                                                                                        name="slider"
                                                                                                        checked>
                                                    <span class="vs-checkbox"> <span class="vs-checkbox--check"> <i
                                                                class="vs-icon feather icon-check"></i> </span> </span>
                                                    <span class="">مدیریت اسلایدر ها</span></div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success"><input type="checkbox"
                                                                                                        name="role"
                                                                                                        checked>
                                                    <span class="vs-checkbox"> <span class="vs-checkbox--check"> <i
                                                                class="vs-icon feather icon-check"></i> </span> </span>
                                                    <span class="">مدیریت سطوح دسترسی</span></div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success"><input type="checkbox"
                                                                                                        name="blog"
                                                                                                        checked>
                                                    <span class="vs-checkbox"> <span class="vs-checkbox--check"> <i
                                                                class="vs-icon feather icon-check"></i> </span> </span>
                                                    <span class="">مدیریت مقالات</span></div>
                                            </fieldset>
                                        </li>
                                        <li class="d-inline-block mr-2">
                                            <fieldset>
                                                <div class="vs-checkbox-con vs-checkbox-success"><input type="checkbox"
                                                                                                        name="settingContact"
                                                                                                        checked>
                                                    <span class="vs-checkbox"> <span class="vs-checkbox--check"> <i
                                                                class="vs-icon feather icon-check"></i> </span> </span>
                                                    <span class="">مدیریت نظرات و پیشنهادات</span></div>
                                            </fieldset>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions center border-0" style="margin-left: 10px">
                            <button type="submit" class="btn btn-primary">
                                <i class="la la-check-square-o"></i> ذخیره
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
