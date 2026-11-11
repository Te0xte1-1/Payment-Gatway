@extends('layouts.app')

@section('content')
    <style>
        th,
        td,
        label {
            text-align: center !important;
        }
    </style>
    <div class="container-fluid">
    
        <div class="row justify-content-center">
             <div class="col-md-12">
         
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="text-center" style="">تقرير مشتريات شهري</h6>
                                    <label for="">من شهر </label>
                                    <input type="date" name="" id="" class="form-control">
                                    {{-- <br> --}}
                                    <label for="">الى شهر </label>
                                    <input type="date" name="" id="" class="form-control">

                                    <a href="Report" class=" form-control btn btn-default" style="margin-top:10px ;background:#ddd">'طباعه
                                        التقرير</a>
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="text-center" style="">تقرير مبيعات شهري</h6>
                                    <label for="">من شهر </label>
                                    <input type="date" name="" id="" class="form-control">
                                    {{-- <br> --}}
                                    <label for="">الى شهر </label>
                                    <input type="date" name="" id="" class="form-control">
                                    <a href="Report" class=" form-control btn btn-default" style="margin-top:10px ;background:#ddd">'طباعه
                                        التقرير</a>
                                </div>
                                <div class="col-sm-3">
                                    <h6 class="text-center" style="">حد الطلب </h6>
                                    <label for="">اختر القسم </label>
                                    <select name="" id="" class="form-control">
                                    <option value=""></option>
                                    </select>
                                    <label for="">اختر الصنف </label>
                                    <select name="" id="" class="form-control">
                                    <option value=""></option>
                                    </select>
                                    <a href="Report" class=" form-control btn btn-default" style="margin-top:10px ;background:#ddd">'طباعه
                                        التقرير</a>
                                </div>
                                <hr>
                                <div class="col-sm-3">
                                    <h6 class="text-center" style="">تقرير وردية </h6>
                                    <label for="">رقم الوردية </label>
                                    <input type="date" name="" id="" class="form-control">
                                    <a href="Report" class=" form-control btn btn-default" style="margin-top:10px ;background:#ddd">'طباعه
                                        التقرير</a>
                                </div>
                            </div>

                    
                        <hr>
                   
                    </div>
                {{-- </div>
            </div>

        </div> --}}
    </div>
@endsection
