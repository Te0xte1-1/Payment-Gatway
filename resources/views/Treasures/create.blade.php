@extends('layouts.app')

@section('content')
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Dashboard') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Category</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-info">
                    <div class="card-header">{{ __('Categorys') }}</div>
                    <div class="card-body">
                        <div class="card-header">
                            <h3 class="card-title">Add New Category</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- form start -->
                                <form  method="POST">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            {{-- <label for="exampleInputEmail1">Category Name</label> --}}
                                            <input type="text" class="form-control" name="cat_name"
                                                id="exampleInputEmail1" placeholder="Enter Category Name">
                                        </div>
                                        <div class="form-group">
                                            {{-- <label for="exampleInputEmail1">Category Description</label> --}}
                                            <input type="text" class="form-control" name="cat_description"
                                                id="exampleInputEmail1" placeholder="Enter Category Description">
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
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
