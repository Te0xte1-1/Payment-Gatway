@extends('layouts.app')

@section('title')
    Category
@endsection
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">

            <li class="breadcrumb-item active">ضبط المخازن</li>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('Cat') }}">الأقسام</a></li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h6 class="text-center">
                            {{ __('أقسام الأصناف') }}
                        </h6>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <a href="#" class="btn btn-primary btn-sm" id="add"
                                        style="margin-left:470px;" data-toggle="modal" data-target="#modal-default">
                                        إضافة قسم جديد
                                    </a>

                                    <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">نافذة لإضافة البيانات الجديدة</h6>
                                                    <span aria-hidden="true">&times;</span>
                                                    <button type="button" class="close" style="float:left"
                                                        data-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('Category.store') }}" method="POST">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="">اسم القسم</label>
                                                                <input type="text" class="form-control" name="cat_name"
                                                                    id="cat_name" placeholder="أضف إسم القسم">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">عدد البضاعه داخل
                                                                    الوحده</label>
                                                                <input type="text" class="form-control"
                                                                    name="cat_description" id="cat_description"
                                                                    placeholder="أضف الوصف ليس إجباري">
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">إغلاق</button>
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm">تأكيد</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->


                                </div>
                            </div>

                        </div>
                        <hr>
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped " aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th>
                                            اسم القسم</th>
                                        <th>
                                            وصف القسم</th>
                                        <th>
                                            حالة القسم</th>
                                        <th>
                                            Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->cat_name }}</td>
                                            <td>{{ $item->status }}</td>
                                            <td>
                                                <a href="{{ route('Category.edit', $item->id) }}"><i
                                                        class="fa fa-edit"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->


                    {{-- Cat Edit Modal  --}}
                    <div class="modal fade" id="modal-cat_edit">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Default Modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body">
                                        <form action="{{ route('Category.store') }}" method="POST">
                                            @csrf
                                            <div class="card-body">

                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default btn-sm"
                                                    data-dismiss="modal">إغلاق</button>
                                                <button type="submit" class="btn btn-primary btn-sm">تأكيد</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Cat Edit Modal  --}}
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            // alert();
            $('#add').click(function(e) {
                e.preventDefault();
            
                $('#modal-default').modal({
                    show: true,
                    backdrop: 'static',
                });
            });
        });
    </script>
@endsection
