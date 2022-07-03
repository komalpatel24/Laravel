<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>ADMIN</title>
    <style>
        ul li {
            margin: 12px;
            float:right;
        }

        ul li a:hover {
            color: crimson;
        }

        ul li a {
            font-size: medium;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="mx-auto table-container">
<nav class="navbar p-1 ">
        <ul class="nav justify-content-end">
            <li class="nav-item" id="txt_color"> <a href="main" class="btn  btn-md m-1" id="first">Home</a> </li>
            <li class="nav-item"> <a href="gallary" class="btn btn-md m-1">Gallary</a></li>
            <li class="nav-item "><a href="{{ url('logout') }}" class="btn btn-md m-1">Logout</a></li>
        </ul>
    </nav>
    <h1>{{session('admin')}}</h1>

                <table class="table  text-center table-responsive">
                    <thead>
                        <tr class="text-light" style="background-color:darkslategrey;">
                            <th>Id</th>
                            <th>firstname</th>
                            <th>lastname</th>
                            <!-- <th>password</th> -->
                            <!-- <th>confirm_password</th> -->
                            <th>courses</th>
                            <th>gender</th>
                            <th>age</th>
                            <!-- <th>qualification</th> -->
                            <th>email</th>
                            <th>mobile_no</th>
                            <!-- <th>Imagefile</th> -->
                            <th>Update</th>
                            <th>Delete</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $info)
                        <tr>
                            <td>{{$info->id}}</td>
                            <td>{{$info->firstname}}</td>
                            <td>{{$info->lastname}}</td>
                            <td>{{$info->courses}}</td>
                            <td>{{$info->email}}</td>
                            <td>{{$info->mobile_no}}</td>

                            <td><a data-toggle="modal" data-target="#id-{{$info->id}}" class="btn text-light" style="background-color:darkcyan;">View</a></td>
                            <td><a href="#}}"><i class="fa-solid fa-pen-to-square text-success"></i></a></td>
                            <td><a href="#"><i class="fa-solid fa-trash-can text-danger"></i></a></td>
                        </tr>
                @endforeach
                    </tbody>
                </table>
    </div>
   
</body>
</html>