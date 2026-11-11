@extends('layouts.app')

@section('title')
    Stock
@endsection
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">

            <li class="breadcrumb-item active">ضبط المخازن</li>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('Stock') }}">المخازن</a></li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h4 class="text-center">
                            {{ __('المخازن') }}
                        </h4>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <a href="#" class="btn btn-primary btn-sm" style="margin-left:470px;"
                                        data-toggle="modal" data-target="#modal-default">
                                        إضافة مخزن جديد
                                    </a>

                                    <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">add new data</h6>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('Stock.store') }}" method="POST">
                                                        @csrf
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="">اسم المخزن</label>
                                                                <input type="text" class="form-control" name="stock_name"
                                                                    id="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">مكان المخزن</label>
                                                                <input type="text" class="form-control" name="stock_desc"
                                                                    id="">
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm">Submit</button>
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
                                            اسم المخزن</th>
                                        <th>
                                            وصف المخزن</th>
                                        <th>عدد الأصــنــاف في المخزن</th>
                                        <th> مراجعه الأصــنــاف داخل المخزن</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($Stocks as $item)
                                        <tr>

                                            <td>
                                                {{ $item->stock_name }}
                                            </td>
                                            <td>
                                                {{ $item->stock_location }}
                                            </td>
                                            <td>
                                                {{ $total_items_on_stock }}
                                            </td>
                                            <td>
                                                <a href="{{ route('Stock.Show', $item->id) }}"><i class="fa fa-edit"></i></a>
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
                                        <form action="{{ route('Stock.store') }}" method="POST">
                                            @csrf
                                            <div class="card-body">

                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
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
@endsection
