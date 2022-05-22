
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
   <title>header</title>
   <style>
    .navbar{
      position: -webkit-sticky; /* Safari */
      position: sticky;
      top: 0;
      display: flex;
     }
     
     a:hover {
       background-color: #b3ffff;
       }
       .btn a:hover {
          background-color: greenyellow;
       }
       .navbar a:hover{
            background-color:orange;
            transition: all 0.6s;
        }
       li a, .dropbtn {
          display: inline-block;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;
          border-radius: 3px;
       }
        .dropdown-content {
          display: none;
          position: absolute;
          background-color: #f9f9f9;
          min-width: 160px;
          box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
          z-index: 1;
        }

        .dropdown-content a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          text-align: left;
        }

        /* .dropdown-content a:hover {background-color: #b3ffff;} */
        .dropdown:hover .dropdown-content {
          display: block;
        }
        .dropdown-content{
          border-radius: 8px;
        }
     </style>
  
</head>
<body>
   <nav class="navbar navbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="main" class="btn  btn-md m-1">HOME</a></li>
      
      <li class="dropdown">
        <!-- <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">COURSE<span class="caret"></span></a> -->
        <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"> -->
        <a href="javascript:void(0)" class="dropbtn" class="btn  btn-md m-1">COURSE</a>
        <div class="dropdown-content">
          <a class="dropdown-item" href="#">Full Stack</a>
          <a class="dropdown-item" href="#">Web Designing</a>
          <a class="dropdown-item" href="#">Web Development</a>
          <a class="dropdown-item" href="#">Graphic Design</a>
          <a class="dropdown-item" href="#">Video Editing </a>
          <a class="dropdown-item" href="#">CCC</a>
          <a class="dropdown-item" href="#">Tally</a>
        <!-- </ul> -->
        </div>
      </li>
      <li><a href="registration" class="btn  btn-md m-1">REGISTRATION</a></li>
      <li><a href="login" class="btn  btn-md m-1">LOGIN </a></li>
      <li><a href="gallary" class="btn  btn-md m-1">GALLARY </a></li>
      <li><a href="#" class="btn  btn-md m-1">ABOUT US </a></li>
      <li><a href="#" class="btn  btn-md m-1">CONTACT US </a></li>
    </ul>
  </div>
</nav>
  
</body>
</html>