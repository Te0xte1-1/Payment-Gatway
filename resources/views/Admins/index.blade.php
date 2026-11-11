@extends('layouts.app')

@section('title')
    Admins
@endsection
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">

            <li class="breadcrumb-item active">ضبط الصلاحيات</li>
            </li>
            <li class="breadcrumb-item active"><a href="{{ route('Admins') }}">المستخدمين</a></li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h6 class="text-center">
                            {{ __('صلاحيات المستخدمين') }}
                            <i class="fa fa-user"></i>
                        </h6>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="dt-buttons btn-group flex-wrap">
                                    <a href="#" class="btn btn-primary btn-sm" style="margin-left:450px;"
                                        data-toggle="modal" data-target="#modal-default">
                                        إضافة مستخدم جديد
                                    </a>

                                    <div class="modal fade" id="modal-default">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h6 class="modal-title">add new data</h6>
                                                    <span aria-hidden="true">&times;</span>
                                                    <button type="button" class="close" style="float:left"
                                                        data-dismiss="modal" aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                 
                                                        <div class="card-body">
                                                            <div class="form-group">
                                                                <label for="">اسم المستخدم</label>
                                                                <input type="text" class="form-control" name="cat_name"
                                                                    id="cat_name" placeholder="أضف إسم المستخدم">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">عدد البضاعه داخل
                                                                    الوحده</label>
                                                                <input type="text" class="form-control"
                                                                    name="cat_description" id="cat_description"
                                                                    placeholder="أضف الوصف ليس إجباري">
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default btn-sm"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn btn-primary btn-sm">Submit</button>
                                                        </div>
                                                   
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <!-- /.modal -->


                                </div>
                            </div>

                        </div>
                        <hr>
                       
                    </div>
                    <!-- /.card-body -->


                    {{-- Cat Edit Modal  --}}
                    <div class="modal fade" id="modal-cat_edit">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Default Modal</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body">
                                       
                                            <div class="card-body">

                                            </div>
                                            <div class="modal-footer justify-content-between">
                                                <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Cat Edit Modal  --}}
                </div>
            </div>
        </div>
    </div>
@endsection
