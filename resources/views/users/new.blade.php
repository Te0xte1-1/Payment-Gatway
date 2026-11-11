<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<style>
    body {
        background: #f4f6f9;
    }

    .container {
        border: 1px solid #ddd;
        background: #fff;
        font-size: 20px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        margin: 20px auto;
        padding: 10px;
    }

    label {
        margin: 15px 0 15px 10px;
    }
</style>

<body>
    <div class="header">
        <a href="#" style="margin-left: 20px">
            <img src="{{ asset('images/Assets/AdminLTELogo.png') }}" style="border-radius: 50%;border: 1px solid#777;"
                width="50" height="50" alt="" srcset="">
            IP-MAGIX
        </a>

        <a href="{{ route('login') }}" style="margin-right:10px" class="btn btn-default btn-sm"> Sign In</a>

    </div>
    <div class="container">
        <form action="{{ route('user.new.store') }}" method="post">
            @csrf
            <div class="card-body">
                <h4 class="text-center">New User</h4>
                <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" id="username" name="username" placeholder="Enter text">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">Full Name</label>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="text" class="form-control" id="full_name" name="full_name">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <button type="submit" class="form-control btn btn-primary btn-sm">Submit</button>
        </form>
        <br>
    </div>
</body>

</html>
