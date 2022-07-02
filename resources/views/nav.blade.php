<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/nav.css')}}">
    <style>
    
       .tooltiptext {
            visibility: hidden;
            width: 90px;
            background-color: gray;
            color: #fff;
            text-align: center;
            border-radius: 10px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            top: 140%;
            left: 50%;
            margin-left: -60px;
          }

        .tooltiptext::after {
            content: "";
            position: absolute;
            bottom: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: transparent transparent gray transparent;
          }
           #t1:hover .tooltiptext {
              visibility: visible;
            }
    </style>
</head>
<body>

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
      <li><a href="registration">REGISTRATION</a></li>
      <li><a href="login1">LOGIN </a></li>
      <li><a href="gallary">GALLARY </a></li>
      <li><a href="#">ABOUT US </a></li>
      <!-- <div class="t1"> -->
          <li><a href="contactus" id="t1">CONTACT US 
          <span class="tooltiptext">Contact</span></a></li>
      <!-- </div> -->
      <li><a href="dashboard">DASHBOARD </a></li>
    
    </ul>
  </div>
 

</body>
</html>


