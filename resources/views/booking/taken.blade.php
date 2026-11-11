@extends('layouts.app')
@section('title'.'Booking Page')
    
@endsection
@section('content')
    <style>
        label {
            margin-bottom: 5px;
        }
    </style>
    <div class="container-fluid">
        <div class="col-12 col-sm-12">               
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel"
                            aria-labelledby="custom-tabs-three-home-tab">
                            <h3>New Booking </h3>
                            <hr>
                        
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="">Floor</label>
                                    <select name="" class="form-control form-control-sm" id="">
                                        <option value="">-- select --</option>
                                        <option value="1">First Floor</option>
                                        <option value="1">First Floor</option>
                                        <option value="1">First Floor</option>
                                        <option value="1">First Floor</option>
                                        <option value="1">First Floor</option>
                                    </select>
                                    <button style="margin-top: 10px;"
                                    class="form-control form-control-sm btn btn-success btn-sm">بحث</button>
                                </div>
                            </div>

                            <br>
                            <div class="card">
                                <div class="card-body" style="min-height: 200px;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <thead>
                                                <tr>
                                                    <th>الطابق</th>
                                                    <th>نوع الغرفه</th>
                                                    <th>رقم الغرفه</th>   
                                                </tr>
                                            </thead>
                                        <tbody>
                                            <tr>
                                                <td>الطابق الأول</td>
                                                <td>غرفة لشخص</td>
                                                <td>65</td>
                                            </tr>
                                            <br>
                                            <tr>
                                                <td>الطابق الثالث</td>
                                                <td>غرفه لعائلة</td>
                                                <td>45</td>
                                            </tr>
                                            <tr>
                                                <td>الطابق الثاني</td>
                                                <td>غرفة لزوجين</td>
                                                <td>2</td>
                                            </tr>
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                                <br>
                            </div>
                        </div>

             

                        <div class="tab-pane fade" id="show_all" role="tabpanel"
                            aria-labelledby="custom-tabs-three-profile-tab">
                            <table class="table table-bordered table-sm">
                              <thead>
                                  <thead>
                                      <tr>
                                          <th>Floor</th>
                                          <th>Room Type</th>
                                          <th>Room Number</th>
                                          <th>ID</th>
                                      </tr>

                                  </thead>
                              <tbody>
                                  <tr>

                                      <td>123</td>

                                      <td>123</td>
                                      
                                      <td><i class="fa fa-arrow-down"></i></td>
                                  </tr>
                                  <br>
                                  <br>
                                  <tr>
                                      <td>123</td>


                                      <td>123</td>
                                      
                                      <td><i class="fa fa-arrow-down"></i></td>
                                  </tr>
                                  <tr>
                                      <td>123</td>


                                      <td>123</td>
                                      
                                      <td><i class="fa fa-arrow-down"></i></td>
                                  </tr>
                              </tbody>
                              </thead>
                          </table>
                        </div>

                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    @endsection
