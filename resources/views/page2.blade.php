<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
    <style>
        *{
            margin:0px;
            padding:0px;
        }
         body {
            background-color: rgb(190, 221, 231); 
            text-align: center;
           }
         .heading {
            width:100%;
            text-align: center;
         }
         .heading h1{   
             color:black;                 
            font-weight:bold;  
            margin:auto; 
            font-size:90px; 
            margin-top:50px;
           }
         .heading h2{ 
             color:red;                   
            font-weight:bold;   
            font-size:90px;  
            line-height:70px;     
         }
          .info p{
             color: rgb(29, 28, 28);
            word-spacing: 1px;
            letter-spacing: 1px;
             font-size: 120%;
             text-align: center;
             line-height: 27px;
             margin-bottom: 50px;
         }
        .main{
            background-color: #ff1a1a;
            height:250px;
            width:100%;
            margin-top:150px;
         }
        
        .container{
            display:flex;
            width:100%;
            position:absolute;
            top:420px;
            text-align:center;
            }
        .box{
           /* width:220px;
             height:150px; */
            background-color: whitesmoke;
            height:500px;
            width:330px;
            margin:20px;
            border-radius: 2%;
            margin-left: 74px;
         }
         .box img{
             margin-top: 25px;
             height: 180px;
             width: 200px;
         }
          .data h4{
             font-size: 23px;
             margin-top: 30px;
             color: rgb(65, 99, 236); 
             
            } 
            .con{
                margin-top: 25px;
                margin-bottom: 55px;
            }
        
          .btn a {
                background-color:red;
                padding: 14px 25px;
                text-align: center;
                text-decoration: none;
                border:2px solid rgb(190, 221, 231);
                color: white;
             }
         .btn a:hover{
             background-color:rgb(29, 29, 29);
         }  
         .text{
           margin-top:180px;
            font-size:20px;
            }
         .footer{
             margin-top:80px;
             background-color: rgb(29, 29, 29);
             height:300px;
          }
         .footer p{
             padding-top:60px;
            font-size: 18px;
            color: white;
         }
         .f1{
             display: flex;
             margin-top: 110px;
            margin-left: 37%;
         }
         .f1 a{
            color: rgb(65, 99, 236); 
         }
         
</style>
</head>
<body>
    <div class="heading">
        <h1>The PHP Laravel  Framework </h1>
           <h2> for Web Artisans</h2>
    </div> 
    <br><br>
    <div class="info">
        <p>Laravel is a web application framework with expressive, elegant 
            syntax. <br> We've already laid the foundation - freeing you to create 
            without   <br> sweating the small things. </p>
    </div>  <br> <br>

   <div class="main">
    
</div>

<div class="container">
    <div class="box">
        <img src="./emoji/1.jpg" alt="web designing">
         <div class="data">
           <h4> WEB DESIGNING</h4>
       </div> 
       <div class="con">
        Sample text. Click to select the text   <br>
         box. Click again or double click to start <br>
         editing the text.
       </div>
        <div class="btn">
           <a href="https://html.com/" target="_blank">LEARN HTML</a>
        </div> 
   </div> 
   <div class="box">
       <img src="./emoji/2.jpg" alt="web development" >
        <div class="data">
            <h4>WEB DEVELOPMENT</h4>
        </div>
        <div class="con">
            Sample text. Click to select the text <br>
             box. Click again or double click to start <br>
             editing the text.
           </div>
        <div class="btn">
            <a href="https://stackoverflow.com/questions/4478389/best-php-training" target="_blank">LEARN PHP</a>
        </div>
   </div>
    <div class="box">
        <img src="./emoji/3.jpg" alt="laravel">
        <div class="data"> 
            <h4>LARAVEL</h4>
       </div>
       <div class="con">
        Sample text. Click to select the text <br>
         box. Click again or double click to start <br>
         editing the text.
       </div>
        <div class="btn">
            <a href="https://laravel.com/" target="_blank">LEARN LARAVEL</a>
        </div>
    </div>
</div>
       
    <div class="text">
           <p>images from <a href="https://www.freepik.com/vectors/technology">Freepik</a></p>
     </div>

       
     <div class="footer">
        <p>Sample text. Click to select the text box. Click again or double <br>
            click to start editing the text.</p> 
         <div class="f1">
            <a href="https://colorlib.com/wp/laravel-templates/"> Website Template </a> &nbsp;&nbsp;

            <h6 style="color: white; font-size: 15px;"> created with </h6> &nbsp;&nbsp;
            <a href="https://www.thebest10websitebuilders.com/charts/7/best-website-builders?
            utm_campaign=ma_thebest10_en_thebest10websitebuilders.
            com_en-3_b-p^56197755300&experiment_id=1408757704^^571888344219^web%20site%20creator^p&gclid=
            CjwKCAjwur-SBhB6EiwA5sKtjoDreow2GWkyJ14L6BnkPPbzfCHxAgOmp-RNh1CywVZzoUxHeZycaxoCKV8QAvD_BwE">
            Website Builder Software </a>
        </div>
    </div> 
</body>
</html>