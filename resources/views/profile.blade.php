<!-- <h1>Welcome To Laravel</h1>
<h3>{{session('user') }}</h3>
<a href="/logout">Logout</a> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <title>Profile</title>
    <style>
        #txt {
            color: orange;
        }
        .container a:hover{
            background-color: yellowgreen;
            transition: all 0.6s;
            color: black;
        }
        .container{
            background-color:rgba(0, 0, 0, 0.6);
            border: 1px solid black;
        }
        .nav li a{
            color:white;
        }

    </style>
</head>
<body id="profile">
    <div class="container">
        <ul class="nav">
            <li class="text-left nav-item col-6"><a href="main" class="btn btn-md m-1">Home</a></li>
            <li class="text-right nav-item col-6"><a href="logout" class="btn btn-md m-1">Logout</a></li>
        </ul>
    </div>   
      <div class="container m-auto row justify-content-center text-white p-5"> 
          <h1> Hello..... <br>{{session('user')}} <br>Welcome To The Angel Multimedia Institute</h1> 
      </div> 
     
  
</body>
</html>