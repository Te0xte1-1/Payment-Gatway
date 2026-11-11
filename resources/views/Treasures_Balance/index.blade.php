@extends('layouts.app')

@section('title','Treasures')

@endsection
@section('content')
<style>
    td{
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px !important;
        font-weight: bold;
    }
</style>
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">

            <li class="breadcrumb-item active">ضبط المخازن</li>
            </li>
            <li class="breadcrumb-item active"><a href="#">الأقسام</a></li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h6 class="text-center">
                        {{ __('رصيد الخزن') }}

                    </h6>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <th></th>
                                <th></th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td style="background:lightseagreen">الخزنة الرئيسية</td>
                                    <td style="background: #5c5d14d4"> رصيد الخزنة ( 10,340,00 ) جنية سوداني فقط لا غير</td>
                                  
                                  
                                </tr>
                                <tr>
                                    <td style="background:lightblue">الخزنة الفرعية</td>
                                    <td style="background:lightsalmon"> رصيد الخزنة ( 23,550,00 ) جنية سوداني فقط لا غير</td>
                                  
                                </tr>
                                <tr>
                                    <td style="background:lightgreen">رئيسية المجمدات</td>
                                    <td style="background: lightblue"> رصيد الخزنة ( 750,000,00 ) جنية سوداني فقط لا غير</td>
                                  
                                </tr>
                                <tr>
                                    <td style="background:#6b6b57">الكاشير</td>
                                    <td style="background:lightcoral">اجمالي رصيد الكاشير( 100,00- ) </td>
                                    
                                </tr>
                            </tbody>
                        </table>

                     
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
@endsection
