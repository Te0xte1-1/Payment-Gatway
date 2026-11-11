@extends('layouts.app')

@section('title')
    Category
@endsection
@section('content')
    <div class="container-fluid">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">

            <li class="breadcrumb-item active">Creadit Cards</li>
            </li>
            <li class="breadcrumb-item active"><a href="#">Transactions</a></li>
        </ol>
        <div class="row justify-content-left">
            <div class="col-md-12">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h6>
                            {{ __('Creadits') }}
                        </h6>
                    </div>

                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 ">
                                <h6>Your Creadit ( $00.00 )</h6>
                                <hr>
                                <h6>add More Creadit</h6>
                                <input type="number" class="form-control form-control-sm">
                                <br>

                                <div class="col-sm-3">
                                    <input type="text" placeholder="Card Holder Name"
                                        class="form-control form-control-sm">
                                    <br>
                                    <input type="text" placeholder="Card Number" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class="btn btn-success btn-sm">Add New</button>
                    </div>
                    <!-- /.card-body -->
                </div>

                <br><br>
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <h6>Transactions</h6>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div class="col-sm-12">
                            <table class="table table-bordered table-striped" aria-describedby="example1_info">
                                <thead>
                                    <tr>
                                        <th>
                                            Room</th>
                                        <th>
                                            Amount</th>
                                        <th>
                                            Time</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td>$10.00</td>
                                        <td>2023-05-20 06:30:46</td>
                                    </tr>
                                    <tr>
                                        <td>Reanee Events</td>
                                        <td>$19.00</td>
                                        <td>2023-05-20 06:30:46</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            // alert();
            $('#add').click(function(e) {
                e.preventDefault();

                $('#modal-default').modal({
                    show: true,
                    backdrop: 'static',
                });
            });
        });
    </script>
@endsection
