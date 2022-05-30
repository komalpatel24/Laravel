<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/74a4c610c1.js" crossorigin="anonymous"></script>

    <title>Contact Us</title>
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
            height: 30px;
            width: 1px;
            position: absolute;
            left:37.29%;
            top: 1%;
            background-color: rgb(255, 255, 255);
        }
        .cc2{
            height: 30px;
            width: 1px;
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
           height: 80px;
            color: white;
        }
        .conimg img{
            height: 400px;
            width: 100%;
        }
        .conimg{
            position: relative;
            background-color:rgb(13, 13, 13,0.8);
            height: 500px;
        }
        .conimg p{
            position: absolute;
            text-align: center;
            top: 13%;
            left: 25%;
            color: white;
            font-size: 45px;
        }
        .conimg h3{
            font-size: 33px;
            text-align: center;
            color: white;
            margin: 22px;
        }
        .navigation{
            background-color: rgb(0, 0, 128,0.8);
            text-align: center;
             height: 40px;
        }
       .add1{
            margin-left: 20px;
            margin-top: 20px;
            font-size: 20px;
        }
        .add{
            display: flex;
        }

        .foo {
            text-decoration: none;
           position: relative;
           left: 110%;
           bottom: 150%;
           color: black;
          
        }.foo h3{
            text-align: center;
            color: black;
        }

        .add2{
            height: 80%;
            width: 30%;
            position: relative;
            left: 840px;
            bottom: 140px;
            border-radius: 6px;
        }
        .add2 input{
            width: 250px;
            height: 30px;
            font-size: 15px;
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
                        <img src="../emoji/angel.png" alt="logo" style="margin-top: 8px;">
                    </div>
                        <div class="navigation">
                        @include('nav')     
                    </div>
                    <div class="conimg">
                        <img src="../emoji/contact2.png" alt="contact">
                        <p><b>New Generation New Technology....</b></p>
                        <h3>Best Computer Class in Lambe Hanuman Road,Surat.</h3>
                    </div>
           </div>

     <div class="add"> 
            <div class="row">
                <div class="col col-sm-6 m-5">
                       <div class="add1">
                            <h1> <b> Address </b></h2> <br>
                                <big> <b> Branch 1 : </b></big> <br>
                                60, Ishwarkrupa Society, Section 3, 1st Floor, opp. <br>
                                Archana Vidhya Bhavan, Lambe Hanuman Road, Surat - 395006. <br><br>
                                <big>  <b> Branch 2 : </b> </big> <br> 
                                2nd Floor, Varsha Socity-1, NR Dwarkadish Hospital, <br>
                                Lambe Hanuman Road, Surat - 395006. <br>
                       </div>
                </div>
                <div class="col col-sm-6 m-5">
                        <div class="foo">
                            <h3> <b style="font-size: 22px;">Contact Us</b> </h3> <br><br>
                            <a href="#"><i class="fa-solid fa-phone"></i> +91 812 816 6631</a>  <br> <br>
                            <a href="hirenunadkat99@gmail.com"> <i class="fa-solid fa-envelope"></i>  anglemultimedia@gmail.com</a> <br> <br>
                            <a href="https://angelmultimedia.com/"> <i class="fa-brands fa-chrome"></i>  www.angelmultimedia.com</a>
                        </div>
                </div>
            </div>
    </div> 

            <div class="add2">
                        <label for="text">username</label> <br>
                        <input type="text" placeholder="Name" name="name" autofocus> <br><br>
                        <label for="text">mobile_no</label> <br>
                        <input type="text" name="mobile_no" placeholder="Mobile">  <br><br>
                        <label for="text">Courses</label> <br>

                        <select name="department" class="form-control" style="width: 250px;height:30px;">
                                        <option value="" selected disabled>-Choose Courses-</option>
                                        <option value="Full Stake">Full Stake</option>
                                        <option value="Web Designing">a Web Designing</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Video Editing">Video Editing</option>
                                        <option value="CCC">CCC</option>
                                        <option value="Tally">Tally</option>
                            </select> <br><br>
                </div>

      
</body>
</html>