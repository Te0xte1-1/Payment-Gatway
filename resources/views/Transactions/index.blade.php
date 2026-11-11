@extends('layouts.app')
@section('content')
    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default" id="add">Add Transaction <i
            class="fa fa-plus"></i></button>
    <div class="dt-buttons btn-group flex-wrap">
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">add new data</h6>
                        <button type="button" class="close" style="float:left" data-dismiss="modal" aria-label="Close">x</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form_data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Transaction Name</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">from</label>
                                    <input type="text" class="form-control" name="from" id="from"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">to</label>
                                    <input type="text" class="form-control" name="to" id="to"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Description</label>
                                    <input type="text" class="form-control" name="desc" id="desc"
                                        placeholder="">
                                </div>
                            </div>

                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>


    <hr>
    <div class="card">
        <div class="card-header">
            <h4>Transaction List</h4>
        </div>
        <div class="card-body" style="min-height: 200px;">
            <table class="table table-bordered table-stripped table-hover">
                <thead class="table table-success">
                    <th>#</th>
                    <th>Name</th>
                    <th>Capacity</th>
                    <th>Description</th>
                    <th>Hourle Rate</th>
                    <th>Action</th>

                </thead>
                <tbody>

                    <tr>
                        <td>0001</td>
                        <td>15452</td>
                        <td>2023-05-20</td>
                        <td>15,452.00</td>
                        <td>ahmed yousif</td>
                        <td>
                            <button class="btn btn-success btn-sm">Edit</button>
                            <button class="btn btn-success btn-sm">delete</button>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
@endsection
