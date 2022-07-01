<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .back{
            width: 100vw;
            height: 90vh;
            overflow: hidden;
        }

         .emo{
            width:410%;
            height:100%;
            float: left;
            position: relative;
            animation: back 10s infinite backwards;
          }
        img{
            width:100vw;
            height:100vh;

          }
        @keyframes back{
            0%{left: 0px;}
            20%{left: 0;}
            /* 25%{left: -500px;} */
            40%{left: -500px;}
            /* 55%{left: -1000px;} */
            60%{left: -1000px;}
            /* 75%{left: -1200px;} */
            80%{left: -1300px;}
            /* 95%{left: -500px;} */
            100%{left: 0px;}
          }
    </style>
</head>
<body>
<div class="back">
        <div class="emo">
            <img src="../emoji/bg7.jpg" alt="1">
            <img src="../emoji/bg4.jpg" alt="2">
            <img src="../emoji/Registrationbg.jpg.jpg" alt="3">
            <img src="../emoji/bg3.jpg" alt="5">
        </div>
    </div>
</body>
</html>