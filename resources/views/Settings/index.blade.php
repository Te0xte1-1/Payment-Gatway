@extends('layouts.app')
@section('title')
    Settings
@endsection
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
            <li class="breadcrumb-item active">Settings</li>
        </ol>
        <div class="row">
            <div class="col-md-3">

                <!-- Profile Image -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="" width="150px" height="100px" src="../../dist/img/user4-128x128.jpg"
                                alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">إسم الشركه</h3>

                        <p class="text-muted text-center">Software Engineer</p>

                        <ul class="list-group list-group-unbordered mb-3">
                            <li class="list-group-item">
                                <a class="">شارع عبدالله الطيب</a>
                                <b class="float-right">مقر الشركة</b> 
                            </li>
                            <li class="list-group-item">
                                <a class="">+249114700220</a>
                                <b class="float-right">رقم هاتف الشركة</b> 
                            </li>
                            <li class="list-group-item">
                                <a class="">IP-Magix@hotmail.com</a>
                                <b class="float-right">إيميل الشركة</b> 
                            </li>
                            
                        </ul>

                        <a href="#" class="btn btn-primary btn-block"><b>صفحة الفيس بوك</b></a>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->

                
            </div>
            <!-- /.col -->
            <div class="col-md-9">
                <div class="card card-primary">
                    <div class="card-header">
                      <h3 class="card-title">تعديل معلومات الشركة</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form>
                      <div class="card-body">
                        <div class="form-group">
                          <label for="exampleInputEmail1">اسم الشركة</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">عنوان الشركة</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputFile">شعار الشركة</label>
                          <div class="input-group">
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="exampleInputFile">
                              <label class="custom-file-label" for="exampleInputFile">أختر الشعار</label>
                            </div>
                            <div class="input-group-append">
                              <span class="input-group-text">Upload</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">تعديل البيانات</button>
                      </div>
                    </form>
                  </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </div>
@endsection
