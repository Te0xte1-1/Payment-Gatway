@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active"><a href="{{ route('Dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">الحسابات المالية</a></li>
            <li class="breadcrumb-item active">تعديل</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <!-- /.card-header -->
                    <div class="card-header"><h4 class="text-center">
                        {{ __('تعديل بيانات الحسابات المالية') }}</div>
                        </h4>
                    <div class="card-body ">
                        <div class="card-header">
                            <h3 class="text-right"> 
                                تعديل بيانات
                                حساب مالي
                                رقم (
                                {{ $edit_data->id }})
                            </h3>
                        </div>
                        <!-- form start -->
                        <form action="{{ route('accounts_type.update') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                    <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ $edit_data->account_name }}"
                                                name="move_name" placeholder=" الحسابات المالية">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ $edit_data->related_internal_account }}"
                                                name="screen_show" placeholder=" الحسابات المالية">
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <select class="form-control"  name="status" placeholder=" حالة الحساب ">
                                                <option value="{{$edit_data->status}}">مفعل</option>
                                                <option value="0">متوقف</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="card-footer">
                                    <div align="center">
                                    <button type="submit" class="btn btn-primary btn-sm">تعديل البيانات <i class="fa fa-check"></i></button>
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
