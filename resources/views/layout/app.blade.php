<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-around align-items-center my-3">
                    <img src="{{ asset('images/lucky3lottos.png') }}" width="300px" alt="logo">
                    <img src="{{ asset('images/Making-Money-Just-Got-Easier.gif') }}" width="550px" alt="pitcher">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 border d-flex justify-content-between align-items-center">
                <div class="navbar  navbar-expand-lg">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link font active" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font" href="#">Result</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link font" href="#">Contant Us</a>
                            </li>
                        </ul>
                    </div>
                   <div class="search">
                        <form action="#" class="d-flex">
                            <input type="text" name="search" class="form-control" placeholder="Search">
                            <button type="submit" class="btn btn-danger btn-sm ml-1 mb-1">Search</button>
                        </form>
                    </div>
                   </div>
            </div>
            @yield('content')

            <hr class="horizontal">

            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <p>All rights reserved © Lucky3lotto</p>
                        <div>
                            <a href="https://www.facebook.com" target="_blank"><span class="icon-size" style="color: rgb(62,91,152)"><i class="fa fa-facebook" ></i></span></a>
                            <a href="https://www.twitter.com" target="_blank"><span class="icon-size"><i class="fa fa-twitter" ></i></span></a>
                            <a href="https://www.youtube.com" target="_blank"><span class="icon-size text-danger"><i class="fa fa-youtube" ></i></span></a>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
</body>
</html>