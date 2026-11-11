@extends('layouts.app')

@section('content')
    <style>
        th,
        td {
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .container {
            padding: 10px;
        }

        .row {
            padding-left: 10px;
            padding-right: 10px;
        }

        h2,
        h6 {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center !important;
        }

        label {
            float: right !important;
            margin-right: 15px;
        }
    </style>
    <div class="container">
        {{-- <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item"><a href="#">الــمـــوردون</a></li>
            <li class="breadcrumb-item active">إضافة مورد جديد</li>
        </ol> --}}
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h4 class="text-center">
                            {{ __('الأصــنــاف') }}
                            <i class="fa fa-flag"></i>
                        </h4>
                        {{-- <div class="card-header"> --}}
                        <p class="text-right">إضافة صنف جديد
                            <i class="fa fa-tag"></i>
                        </p>
                        <a title="رجوع لصفحة المشتريات" href="{{ route('Pro') }}" class="text-left">
                            رجوع لقائمة الأصــنــاف
                            <i class="fa fa-arrow-left"></i>
                            </a>
                        {{-- </div> --}}
                    </div>
                    <div class="card-body">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Product.store') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">القسم</label>
                                            <select name="category_id" class="form-control" id="">
                                                <option value=""></option>
                                                @foreach ($category as $cat)
                                                    <option value="{{ $cat->id }}">
                                                        {{ $cat->cat_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">اسم الصنف</label>
                                            <input type="text" class="form-control" required name="product_name"
                                                id="exampleInputEmail1">

                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">وصف الصنف</label>
                                            <input type="text" class="form-control" required name="product_description"
                                                id="exampleInputEmail1">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">سعر الشراء</label>
                                            <input type="number" class="form-control" required name="purshace_Price"
                                                id="exampleInputEmail1">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">سعر البيع</label>
                                            <input type="number" class="form-control" required name="Price"
                                                id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">الكمية المراد إضافتها
                                                الى المخزن</label>
                                            <input type="number" class="form-control" required name="stock"
                                                id="exampleInputEmail1">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">حد الصرف</label>
                                            <input type="number" class="form-control" required name="risk"
                                                id="exampleInputEmail1">
                                        </div>
                                    </div>
                                </div>
                                <div class="photo" align="center">
                                    <div class="form-group">
                                        <label for="">صورة الصنف</label>
                                        <br>
                                        <input type="file" name="photo" id="photo_pro">
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" class="form-control btn-success" value="حفظ البيانات">
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
