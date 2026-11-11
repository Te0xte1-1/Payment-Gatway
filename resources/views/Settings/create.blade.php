@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#"></a></li>
            <li class="breadcrumb-item"><a href="#">الــمـــوردون</a></li>
            <li class="breadcrumb-item active">إضافة مورد جديد</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">{{ __('الموردون') }}</div>
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="card-title">إضافة مور جديد</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- form start -->
                            <form action="{{ route('Suppliers.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="cat_name"
                                                 placeholder="">
                                        </div>

                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="cat_name"
                                                 placeholder="">
                                        </div>


                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="cat_description"
                                                 placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="cat_name"
                                                 placeholder="">
                                        </div>

                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="cat_name"
                                                 placeholder="">
                                        </div>


                                        <div class="form-group">
                                            
                                            <input type="text" class="form-control" name="cat_description"
                                                 placeholder="">
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input type="submit" value="حفظ البيانات">
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
