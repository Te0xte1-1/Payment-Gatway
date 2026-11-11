@extends('layouts.app')
@section('title')
    Dashboard Page
@endsection
@section('content')
    <style>
        .nav {
            display: flex;
            flex-wrap: wrap;
            /* padding-left: 55px; */
            /* margin-bottom: 0; */
            list-style: none;
        }

        .nav-link {
            display: block;
            /* padding: 0.5rem 1rem; */
            border: 1px solid #ddd;
            border-radius: 8px;
            margin: 2px;
            text-decoration: none;
            text-align: center;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .nav-link:hover {
            background-color: var(--banfseg);
            border-radius: 5px;
            color: #ffffff;
        }.nav-item a{
color: black;
font-weight: bold;
        }
    </style>
    <h3>Dashboard <i class="fa fa-home"></i></h3>
    <hr>
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="card">
                <div class="card-header">
                    <label for="">30 Days Over View</label>
                </div>
                <div class="card-body">
                    <h3 style="text-align: center;">
                        Statistics
                        <i class="fas fa-angle-right right"></i>
                    </h3>
                    <hr>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>{{ app\Models\Admins::count() }} </span>
                                <p>Room Booked</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('Booking') }}" class="nav-link">
                                <span>{{ app\Models\Admins::count() }} </span>
                                <p>Empty Rooms</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>{{ app\Models\Admins::count() }} </span>
                                <p>All Visiotrs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>{{ app\Models\Admins::count() }} </span>
                                <p>Booking Taking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link active">
                                <span>{{ app\Models\Admins::count() }} </span>
                                <p>Super Visors </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <span>{{ app\Models\Admins::count() }} </span>
                                <p>Treasures</p>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6">
            <div class="card">

                <div class="card-body">
                    <li class="nav-item menu-open">

                        <h3 style="text-align: center;">
                            Quick Access
                            <i class="fas fa-angle-right right"></i>
                        </h3>
<hr>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="../UI/general.html" class="nav-link">
                                    <p>Settings <i class="fa fa-home"></i></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <p> Rooms <i class="fa fa-home"></i></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <p>New Booking <i class="fa fa-home"></i></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <p>Booking Taking <i class="fa fa-home"></i></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link active">
                                    <p>Super Visors  <i class="fa fa-home"></i></p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="" class="nav-link">
                                    <p>Treasures <i class="fa fa-home"></i></p>
                                </a>
                            </li>

                        </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
<br>
    <div class="card">
        <div class="card-body" style="min-height: 200px;">
            <br>
            <h5>Free HRMS Soulutions</h5>
            <br>
            <p style="line-height: 30px;
                letter-spacing: 1px;">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis odit, totam nemo omnis enim
                numquam. Doloribus nisi nesciunt suscipit quod libero provident praesentium sequi minus soluta
                reprehenderit, perspiciatis esse! Consequuntur!
            </p>
            <br>
            <div class="booking_button">
                <a href="#"
                    style=" width: 200px;
                    margin: 10px 10px;
                    background-color: rgb(60 60 128);
                    padding: 10px;
                    font-weight: 500;
                    text-align: center;
                    color: #EEE;">Create
                    New Booking</a>

            </div>
            {{-- <br> --}}
        </div>
    </div>
@endsection
