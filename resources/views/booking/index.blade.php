@extends('layouts.app')
@section('title' . 'Booking Page')
@endsection
@section('content')
    <style>
        label {
            margin-bottom: 5px;
        }
    </style>
    <div class="container-fluid">
        <div class="col-12 col-sm-12">
            <div class="card card-primary card-outline card-tabs">
                <div class="card-header p-0 pt-1 border-bottom-0">
                    <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill"
                                href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home"
                                aria-selected="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill"
                                href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile"
                                aria-selected="false">Profile</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" id="show_all" data-toggle="pill" href="#show_all" role="tab"
                                aria-controls="show_all" aria-selected="false">show all</a>
                        </li>

                    </ul>
                </div>
                <div class="card-body">
                    <div class="tab-content" id="custom-tabs-three-tabContent">
                        <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel"
                            aria-labelledby="custom-tabs-three-home-tab">
                            <h3>New Booking </h3>
                            <hr>
                            <br>
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <label for="">Choose Booking Type</label>
                                    <select name="" class="form-control form-control-sm" id="">
                                        <option value="0">-----Choose-----</option>
                                        @foreach ($booking_types as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <label for="">Select Floor</label>
                                    <select name="" class="form-control form-control-sm" id="">
                                        <option value="0">-----Choose-----</option>
                                        @foreach ($floors as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <button style="margin-top: 10px;"
                                class="form-control form-control-sm btn btn-success">بحث</button>
                            <br>
                            <br>
                            <div class="card">
                                <div class="card-body" style="min-height: 200px;">
                                    <button class="btn btn-success btn-sm" data-toggle="modal"
                                    data-target="#modal-xl">Booking
                                    <i class="fa fa-check"></i> </button>
                                    <br>
                                    <br>
                                    <table class="table table-bordered table-sm">
                                        <thead>
                                            <thead>
                                                <tr>
                                                    <th>Floor</th>
                                                    <th>Booking Type</th>
                                                    <th>Room Type</th>
                                                    <th>Room Number</th>
                                                    <th>Booking Name</th>
                                                    <th>Action</th>
                                                    <th>ID</th>
                                                </tr>

                                            </thead>
                                        <tbody>
                                            @foreach ($bookings as $item)
                                          
                                                    <tr>
                                                        <td>{{ $item->floor_number }}</td>
                                                        <td>{{ $item->booking_type }}</td>
                                                        <td>{{ $item->room_type }}</td>
                                                        <td>{{ $item->room_number }}</td>
                                                        <td>{{ $item->booking_name }}</td>
                                                        <td></td>
                                                        <td><i class="fa fa-arrow-down"></i></td>
                                                    </tr>
                                                @endforeach
                                        </tbody>
                                        </thead>
                                    </table>
                                </div>
                                <br>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="modal-xl" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Extra Large Modal</h4>
                                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">

                                        <div class="card-body">
                                            <form action="{{ route('Booking.Store') }}" method="post">
                                                @csrf
                                                <input type="hidden" class="form-control" name="Booking_Serial"
                                                    value="234549652112564" id="Booking_Serial">

                                                <div class="row">

                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label for="">Booking Period</label>
                                                            <select name="Booking_Period"
                                                                class="form-control form-control-sm" id="Floor">
                                                                <option value="1">-- Choose --</option>
                                                                @foreach ($booking_periods as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Floor</label>
                                                            <select name="Floor" class="form-control form-control-sm"
                                                                id="Floor">
                                                                <option value="1">-- Choose --</option>
                                                                @foreach ($floors as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Room Number</label>
                                                            <input type="number" name="Room_Number" class="form-control"
                                                                id="Room_Number">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="">Visitor Type</label>
                                                            <select name="Visitor_Type"
                                                                class="form-control form-control-sm" id="Visitor_Type">
                                                                <option value="1">-- Choose --</option>
                                                                @foreach ($visitors_types as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group mb-3">
                                                            <label for="">Booking_Type</label>
                                                            <select name="Booking_Type"
                                                                class="form-control form-control-sm" id="Booking_Type">
                                                                <option value="1">-- Choose --</option>
                                                                @foreach ($booking_types as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Room Type</label>
                                                            <select name="Room_Type" class="form-control form-control-sm"
                                                                id="Room_Type">
                                                                <option value="1">-- Choose --</option>
                                                                @foreach ($room_types as $item)
                                                                    <option value="{{ $item->id }}">
                                                                        {{ $item->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Full Name</label>
                                                            <input type="text" name="Full_Name" id="Full_Name"
                                                                class="form-control form-control-sm"
                                                                placeholder="Write Your Family Name">
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label for="">Count Family</label>
                                                            <input type="number" name="count_family" id="count_family"
                                                                class="form-control form-control-sm">
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <img src="{{ asset('images/Assets/work_photo/imgs/stats.jpg') }}"
                                                                style="border:1px solid #777;padding:5px;background:#eee"
                                                                width="200" height="200px" alt=""
                                                                srcset="">
                                                            <input type="file" name="" id="">
                                                        </div>

                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div align="center">
                                                            <img src="{{ asset('images/Assets/work_photo/imgs/stats.jpg') }}"
                                                                style="border:1px solid #777;padding:5px;background:#eee"
                                                                width="200" height="200px" alt=""
                                                                srcset="">
                                                            <input type="file" name="" id="">
                                                        </div>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-danger btn-sm"
                                            data-dismiss="modal">Close</button>
                                        <input type="submit" class="btn btn-primary btn-sm" value="Save changes">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel"
                            aria-labelledby="custom-tabs-three-profile-tab">
                            <div class="row">
                                <div class="col-sm-3"style="background: #dddddd3d;margin:20px;padding-top:10px;">
                                    <div class="rooms">
                                        <span>Device</span>
                                        <p>with danger</p>
                                        <input class="form-control form-sm" type="text" name=""
                                            id="">
                                        <br>
                                        <div class="input-group">
                                            <select name="" class="custom-select form-control form-sm"
                                                id="">
                                                <option value=""></option>
                                                <option value=""></option>
                                            </select>
                                            <input type="submit" value="Submit" class="btn btn-default btn-sm">
                                        </div>
                                        <ul>
                                            <li><a href="">1</a></li>
                                            <li><a href="">2</a></li>
                                            <li><a href="">3</a></li>
                                        </ul>
                                    </div>
                                    <table class="table">
                                        <tr>
                                            <td width="1%"><input type="checkbox" class="form-check-input"
                                                    id="exampleCheck1"></td>
                                            <td>1265665651545</td>
                                        </tr>
                                        <tr>
                                            <td width="1%"><input type="checkbox" class="form-check-input"
                                                    id="exampleCheck1"></td>
                                            <td>1265665651545</td>
                                        </tr>
                                        <tr>
                                            <td width="1%"><input type="checkbox" class="form-check-input"
                                                    id="exampleCheck1"></td>
                                            <td>1265665651545</td>
                                        </tr>
                                        <tr>
                                            <td width="1%"><input type="checkbox" class="form-check-input"
                                                    id="exampleCheck1"></td>
                                            <td>1265665651545</td>
                                        </tr>
                                        <tr>
                                            <td width="1%"><input type="checkbox" class="form-check-input"
                                                    id="exampleCheck1"></td>
                                            <td>1265665651545</td>
                                        </tr>
                                        <tr>
                                            <td width="1%"><input type="checkbox" class="form-check-input"
                                                    id="exampleCheck1"></td>
                                            <td>1265665651545</td>
                                        </tr>
                                        <tr>
                                            <td width="1%"><input type="checkbox" class="form-check-input"
                                                    id="exampleCheck1"></td>
                                            <td>1265665651545</td>
                                        </tr>


                                    </table>
                                </div>
                                <div class="col-sm-8"
                                    style="border:1px solid #dddddd95;text-align:center;margin-left:10px;margin-bottom:20px;margin-top:20px;padding-top:10px;">
                                    <h4>Floor Area</h4>
                                    <hr>
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
                                            <td><button class="btn btn-success btn-sm" data-toggle="modal"
                                                    data-target="#modal-xl">Booking
                                                    <i class="fa fa-check"></i> </button></td>
                                            <td><i class="fa fa-arrow-down"></i></td>
                                        </tr>
                                        <br>
                                        <br>
                                        <tr>
                                            <td>123</td>


                                            <td>123</td>
                                            <td><button class="btn btn-success btn-sm" data-toggle="modal"
                                                    data-target="#modal-xl">Booking
                                                    <i class="fa fa-check"></i> </button></td>
                                            <td><i class="fa fa-arrow-down"></i></td>
                                        </tr>
                                        <tr>
                                            <td>123</td>


                                            <td>123</td>
                                            <td><button class="btn btn-success btn-sm" data-toggle="modal"
                                                    data-target="#modal-xl">Booking
                                                    <i class="fa fa-check"></i> </button></td>
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
