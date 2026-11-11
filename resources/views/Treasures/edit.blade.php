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

        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h4 class="text-center">
                            {{ __('الخزينة') }}
                            <i class="fa fa-tree"></i>
                        </h4>

                        <p class="text-right">إضافة خزنة جديد
                            <i class="fa fa-plus"></i>
                        </p>

                    </div>
                    <div class="card-body">

                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('Treasures.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>اسم الحساب</label>
                                            <input type="text" class="form-control" required name="acc_name"
                                                id="acc_name">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="">نوع الحساب</label>
                                            <select name="acc_type" class="form-control" id="acc_type">
                                                <option value=""></option>
                                                @foreach ($acc_type as $item)
                                                    <option value="{{ $item->id }}">{{ $item->account_name }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>هل الحساب اب</label>
                                            <select name="is_parent" class="form-control" id="is_parent">
                                                <option value=""></option>
                                                <option value="1">نعم</option>
                                                <option value="0">لا</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6" id="divparent" style="display: none">
                                        <div class="form-group">
                                            <label>الحساب الأب</label>
                                            <select name="parent" class="form-control" id="parent">
                                                <option value=""></option>
                                                @foreach ($acc as $item)
                                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>حالة رصيد أول المده </label>
                                            <select name="balance_status" class="form-control" id="balance_status">
                                                <option value=""></option>
                                                <option value="1">دائن</option>
                                                <option value="2">مدين</option>
                                                <option value="3">متزن</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>رصيد اول المده للحساب</label>
                                            <input type="number" class="form-control" required name="balance_start"
                                                id="balance_start">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>ملاحظات</label>
                                            <input type="text" class="form-control" required name="note"
                                                id="note">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>حالة التفعيل </label>
                                            <select name="active" class="form-control" id="active">
                                                <option value=""></option>
                                                <option value="1">مفعل</option>
                                                <option value="0">متوقف</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer">
                                    <input type="submit" class="form-control btn-success" value="حفظ البيانات">
                                </div>
                            </div>
                        </form>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
   
        });
    </script>
@endsection
