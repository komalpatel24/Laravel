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
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">

    <title>Profile</title>
    <style>
        #txt {
            color: white;
        }
        .container a:hover{
            background-color: orange;
            transition: all 0.6s;
            color: black;
        }
        .container{
            background-color:rgba(0, 0, 0, 0.6);
            border: 0.2px solid black;
        }
       

        #pro{
            margin-top: 50px;
        }
    </style>
</head>
<body id="profile">
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
    <div id="pro">
      <div class="container m-auto row justify-content-center text-white p-5"> 
          <h1> Hello..... <br>{{session('user')}} <br>Welcome To The Angel Multimedia Institute</h1> 
      </div> 
     
      </div>
</body>
</html>