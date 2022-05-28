<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/74a4c610c1.js" crossorigin="anonymous"></script>
    <title>WEBSitePage</title>
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }
        .contact{
            width: 100%;
          background-color:#5c8a8a;
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
        .navigation{
            background-color: rgb(0, 0, 128,0.8);
            text-align: center;
             height: 40px;
        }
        .con{
            width: 100%;
            display: flex;

        }
        .vertical{
            z-index: 1;
            width: 20%;
        }
    .vertical ul {
           
            list-style-type: none;
            margin: 0;
            padding: 0;
           
            background-color: #f1f1f1;
          height: 100%;
           
            }

            .vertical li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
            }

    .vertical li a.active {
        background-color:#5c8a8a;
        color: white;
        }

        .vertical li a:hover:not(.active) {
        background-color: rgb(248, 211, 3);
        color: white;
        }
        .content{
            width: 70%;
           margin-top: 15px;
           margin-left: 15px;
           margin-bottom: 15px;
        }
        .emo{
            width: 10%;
            background-color: gray;
        }
        .footer{
            background-color:rgb(64, 64, 64);
             border: 1px solid black;
            height: 300px;
            display: flex;
        }
        .foo a{
            text-decoration: none;
           position: relative;
           left: 60px;
           top: 58px;
            color: white;

        }
        .f1{
            height: 90px;
            width: 1px;
            position: relative;
           left: 100px;
           top: 110px;
            background-color: white;
        }
        .add{
            color: white;
            position: relative;
           left: 130px;
           top: 67px;
        }
        .f2{
            height: 90px;
            width: 1px;
            position: relative;
           left: 175px;
           top: 110px;
            background-color: white;
        }
        .inquiry{
            background-color: white;
            height: 80%;
            width: 30%;
            position: relative;
            left: 240px;
            top: 30px;
            background-color: #5c8a8a;
            border-radius: 6px;
        }
        .inquiry input{
            width: 250px;
            height: 30px;
            font-size: 15px;
       }
        button{
            width: 70px;
            height: 30px;
        }
        h3{
            font-size: 27px;
             margin-top: 5px;
        }
        .foo h3{
            color: white;
            position: relative;
            left: 15%;
            top: 20%;
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
         <div class="con">  
            <div class="vertical">
              <ul>
                    <li><a class="active" href="#">Full Stack</a></li>
                    <li><a href="webDesigning">Web Designing</a></li>
                    <li><a href="#">Web Development</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Video Editing </a></li>
                    <li><a href="#">CCC</a></li>
                    <li><a href="#">Tally</a></li>
              </ul>
           </div>
           <div class="content">
               <span>What Is Web Development? (Front-End and Back-End) Web development, or web programming, <br>
                is a general term for the processes and skills required to create websites and web <br>
                applications. Examples of web apps include games, messenger applications, email,  <br>
                online stores, and more.</span>
                <br> <br> <br>
                <span>The term "web design" is normally used to describe the design process relating to the front-end <br>
                    (client side) design of a website including writing markup. Web design partially overlaps  <br>
                     web engineering in the broader scope of web development. <br>
                     Web designers are expected to have an awareness of usability and if their role involves creating <br>
                     markup then they are also expected to be up to date with web accessibility guidelines. Contents. <br>
                     1 History. 1.1 1988–2001. 1.1.1 The start of the web and ...</span>
                     <br> <br> <br>
                     <span>A full stack web developer is a person who can develop both client and server software. <br> 
                     In addition to mastering HTML and CSS, he/she also knows how to: Program a browser (like using JavaScript, <br>
                     jQuery, Angular, or Vue) Program a server (like using PHP, ASP, Python, or Node) Program a database <br>
                    (like using SQL, SQLite, or MongoDB) Client Software</span>
         </div>
           <div class="emo">

           </div>
     </div>
           <div class="footer">
               <div class="foo">
              <h3> <b style="font-size: 22px;">Contact Us</b> </h3> <br><br>
                    <a href="#"><i class="fa-solid fa-phone"></i> +91 812 816 6631</a>  <br> <br>
                    <a href="hirenunadkat99@gmail.com"> <i class="fa-solid fa-envelope"></i>  anglemultimedia@gmail.com</a> <br> <br>
                    <a href="https://angelmultimedia.com/"> <i class="fa-brands fa-chrome"></i>  www.angelmultimedia.com</a>
               </div>
               <div class="f1">
                   
               </div>
            <div class="add">
                <Address>
                    <b style="font-size: 22px;">ADDRESS</b>  <br><br>
                      <big>  Branch 1 : </big> <br>
                        60, Ishwarkrupa Society, Section 3, 1st Floor, opp. <br>
                        Archana Vidhya Bhavan, Lambe Hanuman Road, Surat - 395006. <br><br>
                     <big>   Branch 2 : </big> <br> 
                        2nd Floor, Varsha Socity-1, NR Dwarkadish Hospital, <br>
                        Lambe Hanuman Road, Surat - 395006. <br>
                </Address>
            </div>
                <div class="f2">
                    
                </div>
        <div class="inquiry">
            <form action="main"  style="text-align: center; ">
                <h3>Inquiry</h3> <br>
                <input type="text" placeholder="Name" name="name" autofocus> <br><br>
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
                <input type="text" name="mobile_no" placeholder="Mobile">  <br><br>
                <button type="submit"><b>Submit</b></button>
            </form>
      </div>
</div>
    

    </div>
</body>
</html>