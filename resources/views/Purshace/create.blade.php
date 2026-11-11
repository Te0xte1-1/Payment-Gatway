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
                            {{ __('المشتريات') }}
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="card-header">
                            <p class="text-center">إضافة فاتورة مشتريات جديده</p>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- form start -->
                            <form action="store" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="">كود الفاتورة</label>
                                            <input type="text" class="form-control" 
                                                value="{{ rand(1, 1000000000) }}" name="code_bill" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="">الــمـــوردون</label>
                                            <select name="supplier_id" class="form-control" id="supplier_id">
                                                <option value="0">بدون عميل</option>
                                                @foreach ($supplier as $item)
                                                    <option value="{{ $item->id }}">{{ $item->sup_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">طريقة الدفع</label>
                                            <select name="pay_type" id="pay_type" class="form-control">
                                                <option value="">--</option>
                                                @foreach ($pay_type as $item)
                                                <option value="{{ $item->id }}">{{ $item->pay_type_name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">نوع الفاتــــــورة</label>
                                            <select name="bill_type" id="bill_type" class="form-control">
                                                <option value="{{ $bill_type->id }}">{{ $bill_type->bill_type_name }}</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">بيانات المخازن</label>
                                            <select name="store_id" id="store_id" class="form-control">
                                                <option value="">--</option>
                                                @foreach ($Stocks as $item)
                                                <option value="{{ $item->id }}">{{ $item->stock_name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">الملاحظـــات</label>
                                            <input type="text" class="form-control" value="لا توجد ملاحظات" name="note" placeholder="">
                                        </div>
                                    </div>
                                </div>
                                <div id="do" style="margin-left:450px;">
                                    <a href="{{ route('Purshace') }}" id="close_bill" class="btn-danger btn-sm text-center"
                                        value="">إلغاء الفاتــــــورة</a>
                                    <button type="submit" class="btn-success btn-sm" value="">إكمال العملية</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
