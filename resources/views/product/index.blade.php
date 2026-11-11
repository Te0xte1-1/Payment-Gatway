@extends('layouts.app')
@section('title')
    الأصناف
@endsection
@section('content')
    <style>
        body {
            direction: rtl !important;
        }

        label {
            text-align: center !important;
        }

        #photo_pro {
            border: 1px solid rgba(34, 33, 33, 0.251);
            border-radius: 8px;
            width: 300px;
            height: 200px;
            padding: 10px;
            background: #ddd;
        }

        th,
        td {
            font-size: 14px;
            text-align: center;
        }
    </style>
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">ضبط المخازن</a></li>
            <li class="breadcrumb-item">الأصناف</li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h4 class="text-center">
                            {{ __('الأصــنــاف') }}
                        </h4>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <a href="{{ route('Product.create') }}" class="btn btn-default">
                                    اضاف صنف جديد
                                </a>

                            </div>

                        </div>
                        <hr>
                        <div class="col-sm-12">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>اسم القسم</th>
                                        <th>اسم الصنف</th>
                                        <th>سعر الشراء</th>
                                        <th>سعر البيع</th>
                                        <th>الكمية الموجوده في المخزن</th>
                                        <th>حد الصرف</th>
                                        <th>صورة الصنف</th>
                                        <th>تاريخ الإنتهاء</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($Products as $item)
                                        {{-- {{$item}} --}}
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->category->cat_name }}</td>
                                            <td>{{ $item->product_name }}</td>
                                            <td>{{ $item->purshace_price }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td>{{ $item->risk }}</td>
                                            <td>
                                                <img src="{{ asset('images/' . $item->photo) }}" width="130" height="70" alt=""
                                                    srcset="">
                                            </td>
                                            <td>{{ $item->created_at }}</td>
                                            <td><a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                                    data-target="#modal-xl-edit-product">Edit</a><a href=""
                                                    class="btn btn-danger btn-sm ml-1">Delete</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>


                            <div class="modal fade" id="modal-xl-edit-product">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title">Default Modal</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('Product.store') }}" method="POST">
                                                @csrf
                                                {{-- @foreach ($Products as $category)
                                                    {{ $category->category }}
                                                @endforeach --}}
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="">Category</label>
                                                                <select name="category_id" class="form-control"
                                                                    id="">
                                                                    <option value=""></option>
                                                                    {{-- @foreach ($category as $cat)
                                                                <option value="{{ $cat->id }}">{{ $cat->cat_name }}</option>
                                                                @endforeach --}}
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">اسم الصنف</label>
                                                                <input type="text" class="form-control" required
                                                                    name="product_name" id="exampleInputEmail1">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">وصف الصنف
                                                                </label>
                                                                <input type="text" class="form-control" required
                                                                    name="product_description" id="exampleInputEmail1">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">سعر الشراء
                                                                </label>
                                                                <input type="number" class="form-control" required
                                                                    name="purshace_Price" id="exampleInputEmail1">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">
                                                                    سعر البيع</label>
                                                                <input type="number" class="form-control" required
                                                                    name="Price" id="exampleInputEmail1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">الكمية المراد اضافتها
                                                                    للمخزن</label>
                                                                <input type="number" class="form-control" required
                                                                    name="stock" id="exampleInputEmail1">
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="exampleInputEmail1">حد الصرف للصنف</label>
                                                                <input type="number" class="form-control" required
                                                                    name="risk" id="exampleInputEmail1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="modal-footer justify-content-between">
                                            <button type="button" class="btn btn-default"
                                                data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
