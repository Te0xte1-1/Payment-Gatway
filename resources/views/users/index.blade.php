@extends('layouts.app')
@section('title')
    User
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-sm-6">
                        <!-- form start -->
                        <form>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">اسم المستخدم</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                        placeholder="Enter text">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">كلمة السر</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1"
                                        placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile"> الإسم بالكامل</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="text" class="form-control" id="exampleInputFile">
                                        </div>
                                   
                                    </div>
                                </div>
                               
                            </div>
                            <hr>
                            <h4 class="text-center">الصلاحيات للمستخدمين</h4>
                            <hr>
                            <ul class="nav nav-tabs" id="custom-content-below-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="custom-content-below-home-tab" data-toggle="pill"
                                        href="#custom-content-below-home" role="tab"
                                        aria-controls="custom-content-below-home" aria-selected="true">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-profile-tab" data-toggle="pill"
                                        href="#custom-content-below-profile" role="tab"
                                        aria-controls="custom-content-below-profile" aria-selected="false">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-messages-tab" data-toggle="pill"
                                        href="#custom-content-below-messages" role="tab"
                                        aria-controls="custom-content-below-messages" aria-selected="false">Messages</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="custom-content-below-settings-tab" data-toggle="pill"
                                        href="#custom-content-below-settings" role="tab"
                                        aria-controls="custom-content-below-settings" aria-selected="false">Settings</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="custom-content-below-tabContent">
                                <div class="tab-pane fade show active" id="custom-content-below-home" role="tabpanel"
                                    aria-labelledby="custom-content-below-home-tab">
                                    volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce

                                </div>
                                <div class="tab-pane fade" id="custom-content-below-profile" role="tabpanel"
                                    aria-labelledby="custom-content-below-profile-tab">
                                    Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus

                                </div>
                                <div class="tab-pane fade" id="custom-content-below-messages" role="tabpanel"
                                    aria-labelledby="custom-content-below-messages-tab">
                                    Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus

                                </div>
                                <div class="tab-pane fade" id="custom-content-below-settings" role="tabpanel"
                                    aria-labelledby="custom-content-below-settings-tab">
                                    Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus

                                </div>
                            </div>
                            <!-- /.card-body -->

<hr>
                                <button type="submit" class="form-control btn btn-info btn-sm">Submit</button>
                        </form>
                    </div>

                    <div class="col-sm-6">
                        <img src="{{ asset('img/2.png') }}" width="350" height="350" style="border: 3px solid #000;border-radius:8px;padding:20px;
                        margin-left:80px;margin-top:30px;width:350px;height:350px" alt="" srcset="">
                    </div>
                </div>
                <hr>
                <h4 class="text-center">المستخدمين الحاليين في النظام</h4>
                <table class="table table-bordered " aria-describedby="example1_info">
                    <thead>
                        <tr>
                            <th> Product</th>
                            <th>Quantity</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr class="odd">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 1.0</td>

                        </tr>
                        <tr class="even">
                            <td class="dtr-control sorting_1" tabindex="0">Gecko</td>
                            <td>Firefox 1.5</td>

                        </tr>

                        <tr class="odd">
                            <td class="sorting_1 dtr-control">Gecko</td>
                            <td>Netscape 7.2</td>

                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan="1" colspan="1"></th>
                            <th rowspan="1" colspan="1">Toal</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

        </div>


    </div>
    </div>
    </div>
@endsection
