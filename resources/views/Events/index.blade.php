@extends('layouts.app')
@section('content')
    <button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-default" id="add">Add Event <i
            class="fa fa-plus"></i></button>
    <div class="dt-buttons btn-group flex-wrap">
        <div class="modal fade" id="modal-default">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">add new Event data</h6>
                        <button type="button" class="close" style="float:left" data-dismiss="modal"
                            aria-label="Close">x</button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" id="form_data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Room Name</label>
                                    <select name="name" id="name"class="form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">User</label>
                                    <select name="user" id="user"class="form-control">
                                        <option value=""></option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="">Title</label>
                                    <input type="text" class="form-control" name="title" id="title"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">Start Time</label>
                                    <input type="text" class="form-control" name="start" id="start"
                                        placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="">End Time</label>
                                    <input type="text" class="form-control" name="end" id="end"
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
            <h4>Events List</h4>
        </div>
        <div class="card-body" style="min-height: 200px;">
<br>
            <table class="table table-bordered table-stripped table-hover">
                <thead class="table table-success">
                    <th></th>
                    <th>#</th>
                    <th>Room</th>
                    <th>User</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Description</th>
                    <th>Action</th>

                </thead>
                <tbody>

                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>0001</td>
                        <td>15452</td>
                        <td>2023-05-20</td>
                        <td>15,452.00</td>
                        <td>ahmed yousif</td>
                        <td></td>
                        <td>
                            <button class="btn btn-success btn-sm">View</button>
                            <button class="btn btn-success btn-sm">Edit</button>
                            <button class="btn btn-success btn-sm">delete</button>
                        </td>
                    </tr>


                </tbody>
            </table>
        </div>
    </div>
@endsection
