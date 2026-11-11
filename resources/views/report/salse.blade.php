@extends('layouts.app')

@section('content')
    <style>
        th,
        td,label {
            text-align: center !important;
        }
    </style>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-info">
                    <div class="card-header">{{ __('Preview Of Salse Invoices') }}</div>
                    <div class="card-body">

                        <form action="" method="get">
                            <div class="row">
                                <div class="col-sm-3">
                                    <label for="">الى فترة</label>
                                    <input type="date" name="" id="" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <label for="">من فترة</label>
                                    <input type="date" name="" id="" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <div class="from-group">
                                        <label for="">نوع الفاتورة</label>
                                        <select name="" id="" class="form-control">
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="from-group">
                                        <label for="">طريقة الدفع</label>
                                        <select name="" id="" class="form-control">
                                            <option value=""></option>
                                            <option value=""></option>
                                            <option value=""></option>
                                        </select>
                                    </div>
                                </div>
                                
                                <a href="Report" class=" form-control btn btn-success" style="margin-top:10px">تقرير كل الطلبات</a>
                            </div>

                        </form>
                        <hr>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Number OF Invoice</th>
                                    <th>Total OF Invoice</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-info">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        <h6>Show Products</h6>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>الكمية</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
