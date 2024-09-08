@extends('Admin.father.total')
@section('style')
    <link rel="stylesheet" href="/datepicker/css/persianDatepicker-default.css"/>
@stop
@section('content')
    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">ویرایش کد تخفیف</h4></div>
                        <div class="card-content">
                            <div class="card-body">

                                @if(Session::has('success'))
                                    <div class="alert alert-success">
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
                                <form method="post"
                                      action="{{route('storeUpdateCoupon')}}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="code">کد تخفیف</label>
                                                <input type="text" class="form-control" id="code"
                                                       placeholder="کد تخفیف را وارد نمایید" name="code" value="{{$data->code}}"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="discount">مقدار تخفیف</label>
                                                <input type="text" class="form-control" id="discount"
                                                       placeholder="مقدار تخفیف را وارد نمایید" name="discount" value="{{$data->discount}}"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="start_time">تاریخ شروع</label>
                                                <input type="text" class="form-control elementClass" id="start_time"
                                                       placeholder="تاریخ شروع را وارد نمایید" name="start_time" value="{{$data->start_time}}"></fieldset>
                                        </div>
                                        <div class="col-xl-6 col-md-12 col-12 mb-1">
                                            <fieldset class="form-group"><label for="end_time">تاریخ پایان</label>
                                                <input type="text" class="form-control elementClass" id="end_time"
                                                       placeholder="تاریخ پایان را وارد نمایید" name="end_time" value="{{$data->end_time}}"></fieldset>
                                        </div>
                                    </div>
                                    <input name="id" value="{{$data->id}}" style="display: none">
                                    <div class="col-xl-12 col-md-12 col-12 mb-5 text-center">
                                        <button type="submit" class="btn btn-success">تایید</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')
    <script src="/datepicker/js/jquery.min.js"></script>
    <script src="/datepicker/js/persianDatepicker.min.js"></script>
    <script>
        $(".elementClass").persianDatepicker({formatDate: "YYYY-MM-DD"});
    </script>
@endsection
