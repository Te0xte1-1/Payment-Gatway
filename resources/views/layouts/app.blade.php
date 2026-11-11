<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
    <link rel="stylesheet" href="{{ asset('fullcalendar/main.css') }}">
</head>

<body>
    <div class="header">
        <a href="#" style="margin-left: 20px">
            <img src="{{ asset('images/Assets/AdminLTELogo.png') }}" style="border-radius: 50%;border: 1px solid#777;"
                width="50" height="50" alt="" srcset="">
            IP-MAGIX
        </a>
        <ul style="margin-right:10px">
            <a href="#" style="margin-right:10px"> <i
                    class="fa fa-user"></i></a>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <input type="submit" value=" Log Out" class="btn btn-default">
            </form>
        </ul>
    </div>

    <div class="Right_sidebar">


    </div>
    <div class="Left_sidebar">
        <div class="booking_button">
            <a href="{{ route('Booking.Taken') }}">Create New Booking</a>
            <a href="{{ route('Dashboard') }}">Check All Booking</a>
        </div>
        <a href="{{ route('Dashboard') }}">
            <h6><i class="fa fa-home"></i>
                Dashboard
            </h6>
        </a>

        <ul>
            <li><a href="{{ route('Booking') }}"> <i class="fa fa-flag"></i>New Booking</a></li>
            <li><a href="{{ route('Booking.All') }}"> <i class="fa fa-store"></i>All Room Booking </a></li>
            <li><a href="{{ route('Booking.Taken') }}"> <i class="fa fa-tag"></i> Booking Taken</a></li>
            <li><a href="{{ route('Booking.Detailse') }}"> <i class="fa fa-phone"></i> Booking Detailse</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('Creadit') }}"> <i class="fa fa-flag"></i>Creadit</a></li>
            <li><a href="{{ route('Room') }}"> <i class="fa fa-flag"></i>Rooms</a></li>
            <li><a href="{{ route('Events') }}"> <i class="fa fa-store"></i>Events </a></li>
            <li><a href="{{ route('Callendar') }}"> <i class="fa fa-tag"></i> Callender</a></li>
            <li><a href="{{ route('Transactions') }}"> <i class="fa fa-tag"></i> Transactions</a></li>
            <li><a href="{{ route('Rooms.Search') }}"> <i class="fa fa-flag"></i>Search Room</a></li>
        </ul>

        <ul>
            <li><a href="{{ route('Supser_Visors') }}"> <i class="fa fa-mouse"></i> Supser Visors</a></li>
            <li><a href="{{ route('General_Settings') }}"> <i class="fa fa-book"></i> General Settings</a></li>
            <li><a href="{{ route('Treasures') }}"> <i class="fa fa-trash"></i> Treasures</a></li>
            <li><a href="{{ route('Admins') }}"> <i class="fa fa-laptop"></i>Admins</a></li>
            <li><a href="{{ route('Visitor_Type') }}"> <i class="fa fa-laptop"></i>Visitor Type</a></li>
        </ul>
        <ul>
            <li><a href="{{ route('Shifts') }}"> <i class="fa fa-laptop"></i>Shifts</a></li>
            <li><a href="{{ route('Room_Type') }}"> <i class="fa fa-laptop"></i> Rooms Type</a></li>
            <li><a href="{{ route('Reports') }}"> <i class="fa fa-laptop"></i>Reports</a></li>

        </ul>


    </div>
    <!-- main content -->

    <div class="wrapper">
        <div class="container-fluid">
            {{-- <main class="py-4"> --}}
            @yield('content')
            {{-- </main> --}}
        </div>
    </div>



</body>

</html>

<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>


<!-- fontawesome -->
<script src="{{ asset('js/fontawesome.min.js') }}"></script>

<!-- Bootstrap App -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>


</body>

</html>
