@extends('Admin.father.total')

@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@stop

@section('content')

    <div class="content-body">
        <section id="basic-input">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h4 class="card-title">نظرات محصولات</h4></div>
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
                                <div class="modal fade text-left" id="inlineForm" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel33" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"
                                         role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel33">پاسخ شما برای کاربر</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{route('storeUpdateComments')}}" method="post">
                                                @csrf
                                                <input name="id" id="modId" style="display: none">
                                                <div class="modal-body">
                                                    <div class="col-xl-12 col-md-12 col-12 mb-1">
                                                        <fieldset class="form-group"><label
                                                                for="adminDescription"></label>
                                                            <textarea placeholder="پاسخ خود را وارد کنید"
                                                                      name="adminDescription"
                                                                      class="form-control" id="adminDescription"></textarea>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="submit" class="btn btn-primary">
                                                        ارسال
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered data-table">
                                    <thead>
                                    <tr>
                                        <th>ردیف</th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>نام محصول</th>
                                        <th>متن پیام</th>
                                        <th>پاسخ ادمین</th>
                                        <th width="100px">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('script')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(function () {

            var table = $('.data-table').DataTable({
                "oLanguage": {
                    "sUrl": "https://cdn.datatables.net/plug-ins/1.10.19/i18n/Persian.json"
                },
                "pageLength": 25,
                processing: true,
                serverSide: true,
                ajax: "{{ route('ajaxComment') }}",
                columns: [
                    {data: 'DT_RowIndex', name: 'DT_RowIndex'},
                    {data: 'name', name: 'name'},
                    {data: 'product_id', name: 'product_id'},
                    {data: 'descriptionFa', name: 'descriptionFa'},
                    {data: 'adminDescription', name: 'adminDescription'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
            });

        });
    </script>
    <script>
        function adminDescription(id) {
            $("#modId").val(id);
        }
    </script>
@endsection
