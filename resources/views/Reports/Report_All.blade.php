@extends('layouts.app')

@section('content')
    <style>
        th,
        td,
        label {
            text-align: center !important;
        }h3{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 23px;
            color: #000;
        }
    </style>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-3">
                <h3 class="text-center" style="">تقرير  شهري</h3>
                <hr>
                <label for="">من شهر </label>
                <input type="date" name="" id="" class="form-control">
                <label for="">الى شهر </label>
                <input type="date" name="" id="" class="form-control">

                <a href="Report" class=" form-control btn btn-default" style="margin-top:10px ;background:#ddd">طباعه
                    التقرير</a>
            </div>
            <div class="col-sm-3">
                <h3 class="text-center" style="">تقرير  شهري</h3>
                <hr>
                <label for="">من شهر </label>
                <input type="date" name="" id="" class="form-control">
                <label for="">الى شهر </label>
                <input type="date" name="" id="" class="form-control">
                <a href="Report" class=" form-control btn btn-default" style="margin-top:10px ;background:#ddd">طباعه
                    التقرير</a>
            </div>
            <div class="col-sm-3">
                <h3 class="text-center" style="">حد الطلب </h3>
                <hr>
                <label for="">اختر القسم </label>
                <select name="" id="" class="form-control">
                    <option value=""></option>
                </select>
                <label for="">اختر الصنف </label>
                <select name="" id="" class="form-control">
                    <option value=""></option>
                </select>
                <a href="Report" class=" form-control btn btn-default" style="margin-top:10px ;background:#ddd">طباعه
                    التقرير</a>
            </div>

            <div class="col-sm-3">
                <h3 class="text-center" style="">تقرير وردية </h3>
                <hr>
                <label for="">رقم الوردية </label>
                <input type="date" name="" id="" class="form-control">
                <a href="Report" class=" form-control btn btn-default" style="margin-top:10px ;background:#ddd">طباعه
                    التقرير</a>
            </div>
        </div>
        <hr>
    </div>
@endsection
