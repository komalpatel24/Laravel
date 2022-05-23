<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <script src="https://kit.fontawesome.com/74a4c610c1.js" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        
        *{
            margin: 0px;
            padding: 0px;
        }
        .im{
            background-image: url("../emoji/f5.jpg");
                /* background-image: url("../emoji/f10.jpg"); */
                background-repeat: no-repeat;
                height: 100vh;
                background-size: cover;
                background-attachment: fixed;
               background-color: rgb(204, 204, 204,0.1);
             }
             .main{
                /* border-radius: 15px; */
                background-color:white;
                width: 450px;
                height: 550px;
                position: relative;
                top: 45px;
                left: 460px;
                /* background-color: #cccccc; */
                box-shadow: 0 8px 15px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.6);
            }
            h1{
                margin-top: 10px;
            }
            img{
                width: 450px;
                height: 250px;
                /* border-radius: 15px; */
            }
            input{
                text-align:center; 
                width:350px;
                height: 30px;
                margin-top: 5px;
                margin-left:33px;
                border-radius: 10px;
               color: white;
               font-size: 15px;
               /* background-image:linear-gradient(to right, rgb(102, 0, 0,0.6),rgb(255, 102, 0,0.6)); */
               background-image:linear-gradient(to right, rgb(64, 64, 64,0.6),rgb(92, 138, 138,0.6));
            }
            button{
              position: relative;
              top: 10px;
              left: 120px;
               height: 35px;
               width: 100px;
               border-radius: 10px;
               color: white;
               /* background-image:linear-gradient(to right, rgb(102, 0, 0),rgb(255, 102, 0)); */
               background-image:linear-gradient(to right, #404040,#5c8a8a);
            }
             .but button,
                .but input[type=submit], 
                input[type=reset]{
                /* display: inline-block; */
                font-size: 12px;
                letter-spacing: 1px;
                cursor: pointer;
                box-shadow: inset 0 0 0 0 #009999;
                transition: .3s;
                }
            .but button:hover,
            .but input[type=submit],
            input[type=reset]:hover{
            color: #ffffff;
            box-shadow: inset 100px 0 0 0 #009999;
            }
            .input i {
            position: relative;
            left: 65px;
            color: white;
        
        }
        /* .icon {
            padding: 11px;
            color: black;
            min-width: 110px;
            text-align: center;
        } */
        
        /* .social {
            border-radius: 50%;
            background-image:linear-gradient(to right, rgb(102, 0, 0),rgb(255, 102, 0,0.7));
             background-image:linear-gradient(to right, #404040,#5c8a8a);
            width: 27px;
            height: 27px;
            margin-left: 55px;
           position: relative;
           bottom: 21px;
           
        }
        .social i{
            position: relative;
            color: white;
            padding: 11px;
           
            text-align: center;
            left: 5.5px;
            top: 5px;
           }
           span{
               position: relative;
                left: 90px;
                font-size: 12px;
               }
      
          .facebook{
            border-radius: 50%;
            background-image:linear-gradient(to right, rgb(102, 0, 0),rgb(255, 102, 0,0.7));
             background-image:linear-gradient(to right, #404040,#5c8a8a);
            width: 27px;
            height: 27px;
            margin-left: 65px;
           position: relative;
           bottom: 61.8px;
           
        }
          
          .facebook i{
              position: relative;
             left: 6.2px;
             top: 4.5px;
              color: white;
          }
          .soc{ 
              position: relative;
              left: 190px;
          } */
          p{
              position: relative;
              left: 110px;
              top: 20px;
              font-size: 16px;
          }
          .head  {
             background-color:rgb(77, 77, 77);
            }
          
    </style>
</head>
<body>
          @include('nav')
    <div class="im">
       <div class="main">
            <img src="../emoji/f5.jpg" alt="form"><br>
            <!-- <img src="../emoji/f10.jpg" alt="form"><br> -->
             <h1 style="text-align:center;" >Login</h1> <br>
             
             <form action="login" method="POST"enctype="multipart/form-data">
             @csrf
             <div class="con">
                  <div class="input">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Username"  class="form-control" >
                     <small class="form-text  text-danger">@error('username'){{$message}}@enderror</small>
                  </div>
              </div>

                    &nbsp; 
            <div class="con">
                  <div class="input">
                      <i class="fa-solid fa-lock"></i>
                      <input type="password" name="password" placeholder="password" class="form-control">
                      <small class="form-text  text-danger">@error('password'){{$message}}@enderror</small>
                  </div>
            </div> <br>

            <!-- <div class="so">
                <span>Login with E-mail</span>
                <div class="social">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <div class="soc">
                        <p class="logo">Login with facebook</p>
                        <div class="facebook">
                            <i class="fa-brands fa-facebook"></i>
                        </div>
                </div>
            </div> -->
            
            <div class="but">
            <button type="reset"><b>Reset</b></button>
                <button type="submit"><b>Submit</b></button>
            </div>
            <p> Don't have an account <a href="registration">Registration</a></p>
             </form>
      </div>
</div>
</body>
</html>