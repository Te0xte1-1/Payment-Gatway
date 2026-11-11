
@extends('layouts.app')
@section('content')
            <h2>Booking Detailse</h2>
            <hr>
            <br>
            <div class="card">
                <div class="card-body" style="min-height: 200px;">
                    <div class="row">
                        <h4>Customer Info :-</h4>
                        <hr>
                        <div class="col-sm-6" style=" text-align: center;">
                            <br>
                            <span> Name :</span>
                            <strong>Nasr Alden Osman Mohamed</strong>
                            <br>
                            <br>
                            <span> E-MAIL :</span>
                            <strong>test@tex.gmail.com</strong>
                            <br>
                            <br>
                            <span> Address :</span>
                            <strong>KHARTOUM oUMDAURAMN 1542</strong>
                            <br>
                            <br>
                            <span> PassID :</span>
                            <strong>5454265445</strong>
                        </div>

                        <div class="col-sm-6"><img src="Assets/work_photo/avatar/5.png" style="border: 4px solid #DDD;"
                                alt="" srcset=""></div>
                    </div>

                </div>
                <br>
            </div>
            <br>
            <br>
            <div class="card">
                <div class="card-body" style="min-height: 400px;">
                    <h4>Booking Info</h4>
                    <br>
                    <table class="table">
                        <thead>
                            <th>Time For Stay</th>
                            <th>Start</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Time For Stay</td>
                                <td>20 Day</td>
                            </tr>
                            <tr>
                                <td>Start</td>
                                <td>20 Day</td>
                            </tr>
                        </tbody>
                    </table>

                    <br>
                    <button class="form-control" style="background-color:    #5300eb;color: #ffffff;">Print The Booking
                        <i class="fa fa-print"></i></button>
                </div>
            </div>
        </div>
    </div>
@endsection