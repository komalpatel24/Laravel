<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">

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

<div class="container">
       <div class="head">
            <ul>
                <li class="active"><a href="home">HOME</a></li>
                <li><a href="#">COURSE</a>
                    <ul class="dropdown-content">
                        <li><a href="#">Full Stack</a></li>
                        <li><a href="webDesigning">Web Designing</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Graphic Design</a></li>
                        <li><a href="#">Video Editing </a></li>
                        <li><a href="#">CCC</a></li>
                        <li><a href="#">Tally</a></li>
                    </ul>
                </li>
                <li><a href="gallary">GALLARY </a></li>
                <li><a href="#">ABOUT US </a></li>
                <li><a href="#">CONTACT US </a></li>
                <li> <a href="logout">LOGOUT</a> </li>
            </ul>
       </div>
    </div>   

    <div class="container-fluid">
        <h4>{{session('admin')}}</h4>
    </div>

    <table class="table text-center">

        <thead>
            <tr class="bg-warning">
                <th colspan="14">
                    <h1>Customer's Records</h1>
                </th>
            </tr>

            <tr>
                <th class="bg-dark text-white">Id</th>
                <th class="bg-dark text-white">firstname</th>
                <th class="bg-dark text-white">lastname</th>
                <th class="bg-dark text-white">password</th>
                <th class="bg-dark text-white">confirm_password</th>
                <th class="bg-dark text-white">courses</th>
                <th class="bg-dark text-white">gender</th>
                <th class="bg-dark text-white">age</th>
                <th class="bg-dark text-white">qualification</th>
                <th class="bg-dark text-white">email</th>
                <th class="bg-dark text-white">mobile_no</th>
                <th class="bg-dark text-white">Imagefile</th>
              
            </tr>
        </thead>

        <tbody>
            @foreach($records as $record)
            <tr>
                <td class="bg-light">{{$record->cust_id}}</td>
                <td class="bg-light">{{$record->firstname}}</td>
                <td class="bg-light">{{$record->lastname}}</td>
                <td class="bg-light">{{$record->password}}</td>
                <td class="bg-light">{{$record->confirm_password}}</td>
                <td class="bg-light">{{$record->courses}}</td>
                <td class="bg-light">{{$record->gender}}</td>
                <td class="bg-light">{{$record->age}}</td>
                <td class="bg-light">{{$record->qualification}}</td>
                <td class="bg-light">{{$record->email}}</td>
                <td class="bg-light">{{$record->mobile_no}}</td>
                <td class="bg-light"><img src="{{ asset($record->image) }}" width="100" height="75" alt="not connect"> </td>
               
            </tr>
            @endforeach
        </tbody>

    </table>

    
</body>

</html>