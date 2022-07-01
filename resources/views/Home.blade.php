<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/74a4c610c1.js" crossorigin="anonymous"></script>

    <title>Home</title>
    <style>
         *{
            margin: 0px;
            padding: 0px;
        }
        .contact{
            width: 100%;
            background-color:black;
            height:41px;
            text-decoration: none;
            text-align: center;
        }
     .contect{
            background-color: gray;
         }
         .c1 a{
            text-decoration: none;
            color: black;
           position: relative;
           left: 350px;
           top: 10px;
           color: white;

        }
         
        .c2 a{
            /* padding-left: 130px; */
            text-decoration: none;
            color: black;
            text-align: center;
            position: relative;
           left:405px;
           top: 10px;
           color: white;

        }
        .c3 a{
            text-decoration: none;
            color: black;
            position: relative;
           left: 450px;
           top: 10px;
           text-align: center;
           color: white;
        }
        .cc1{
            height: 4vh;
            width: 0.1vw;
            position: absolute;
            left:37.29%;
            top: 1%;
            background-color: rgb(255, 255, 255);
        }
        .cc2{
            height: 4vh;
            width: 0.1vw;
            position: absolute;
            left:57.50%;
            top: 1%;
            background-color: rgb(255, 255, 255);
        }
        .header{
            /* background-color: rgb(228, 182, 32,0.9); */
            padding: 5px;
            text-align: center;
           margin-top: 1%;
           margin-bottom: 1%;
           height: 10%;
            color: white;
        }
        .navigation{
            background-color: rgb(0, 0, 128,0.8);
            text-align: center;
             height: 20%;
        }
             .new {
                     /* padding: 10px; */
                     color: black;
                     margin-top: 1%;
                }
    </style>
</head>
<body>
<div class="contactbar">
            <div class="contact" style="display: flex; ">
                    <div class="c1">
                        <a href="#"><i class="fa-solid fa-phone"></i> +91 812 816 6631</a>
                        <div class="cc1"></div>
                    </div>
                    <div class="c2" >
                        <a href="hirenunadkat99@gmail.com"> <i class="fa-solid fa-envelope"></i>  anglemultimedia@gmail.com</a>
                        <div class="cc2"></div>
                    </div>
                    <div class="c3" >
                        <a href="https://angelmultimedia.com/"> <i class="fa-brands fa-chrome"></i>  www.angelmultimedia.com</a>
                    </div>
            </div>
            <div class="header">
                        <img src="../emoji/angel.png" alt="logo" style="margin-top:1%;">
                        <div class="new">
                            <marquee direction="left"><h3>New Admissions Open for Career and Placement Courses.</h3></marquee>
                        </div> 
                        </div>
                            <div class="navigation">
                            @include('nav')     
                        </div>
                      
            </div>
</div>
</body>
</html>