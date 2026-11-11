<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Plugins/css/style2.css">
    <link rel="stylesheet" href="Plugins/css/bootstrap.min.css">
    <link rel="stylesheet" href="Plugins/fontawesome-free/css/all.min.css">
</head>
<style>
    i.fa.fa-arrow-down {
        background-color: #c8d4e591;
        padding: 10px;
        color: #030303ab;
        cursor: pointer;
    }

    button.btn.btn-success.btn-sm {
        border-radius: 0 !important;
        background-color: var(--banfseg) !important;
    }

    #food {
        display: flex;
        padding: 20px;
    }

    #food ul li {
        margin: 20px;
        padding: 0 10px;

    }

    #food li>a {
        background: #EEE;
        color: #777;
        border-right: 1px solid #ddd !important;
        padding: 25px;
        position: relative;
    }

    #food li>a:hover {
        background-color: rgb(124, 6, 6);
        color: #FFF;
    }

    #food li>a:hover::before {
        content: "";
    position: absolute;
    bottom: -17px;
    background-color: #000;
    height: 17px;
    width: 20px;
    left: 36px;

    }

    #food li>a:active {
        background-color: rgb(124, 6, 6);
    }
</style>

<body>
    <div class="header">
        <!-- <a href="#">LOGO</a> -->
        <img src="Assets/AdminLTELogo.png" style="border-radius: 50%;border: 1px solid#777;" width="50" height="50"
            alt="" srcset="">
        <ul>
            <li><a href="#">User lOGIN</a></li>
            <li><a href="#">button</a></li>
        </ul>
    </div>

    <div class="Right_sidebar">


    </div>

    <div class="wrapper">
        <div class="container">
            <h2>Food Detailse</h2>
            <hr>
            <br>
            <div class="card">
                <div class="card-body" style="min-height: 200px;">
                    <ul id="food" style="display: flex;">
                        <li><a href="">Sheiken Sandwitch</a></li>
                        <li><a href="">Hot Dog</a></li>
                        <li><a href="">pitzza</a></li>
                        <li><a href="">Coffe Tea</a></li>
                        <li><a href="">Chooice</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="Left_sidebar">
        <div class="booking_button">
            <a href="new_booking.html">Create New Booking</a>
            <a href="#">Check All Booking</a>
        </div>
           <a href="index2.htm">
            <h6><i class="fa fa-home"></i> Dashboard</h6>
        </a>

        <ul>
            <li><a href="rooms.html"> <i class="fa fa-store"></i> Rooms</a></li>
            <li><a href="index2.htm"> <i class="fa fa-flag"></i> Booking</a></li>
            <li><a href="booking_taken.html"> <i class="fa fa-tag"></i> Booking Taken</a></li>
            <li><a href="#"> <i class="fa fa-users"></i> Booking Appending</a></li>
        </ul>

        <ul>
            <li><a href="#"> <i class="fa fa-plane"></i> Rooms</a></li>
            <li><a href="#"> <i class="fa fa-user"></i> Booking</a></li>
            <li><a href="#"> <i class="fa fa-print"></i> Booking Taken</a></li>
            <li><a href="#"> <i class="fa fa-phone"></i> Booking Appending</a></li>
        </ul>

        <ul>
            <li><a href="#"> <i class="fa fa-mouse"></i> Payment Links</a></li>
            <li><a href="#"> <i class="fa fa-book"></i> Refaunds</a></li>
            <li><a href="#"> <i class="fa fa-trash"></i> Reseller</a></li>
            <li><a href="#"> <i class="fa fa-laptop"></i> Customers</a></li>
        </ul>


    </div>




    <script src="Plugins/js/bootstrap.min.js"></script>
    <script src="Plugins/js/jquery.min.js"></script>
    <script src="Plugins/js/fontawesome.min.js"></script>
</body>

</html>