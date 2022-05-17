<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallary</title>
    <style>
    /* .pic {
        margin: 30px;
    } */

    div.gallery {
        border: 1px solid #ccc;
    }

    div.gallery:hover {
        border: 1px solid #777;
    }

    div.gallery img {
        width: 100%;
        height: auto;
    }

    div.Data {
        padding: 15px;
        text-align: center;
    }

    * {
        box-sizing: border-box;
    }

    .responsive {
        padding: 0 6px;
        float: left;
        width: 24.99999%;
    }

    @media only screen and (max-width: 700px) {
        .responsive {
            width: 49.99999%;
            margin: 6px 0;
        }
    }

    @media only screen and (max-width: 500px) {
        .responsive {
            width: 100%;
        }
    }

    .clearfix:after {
        content: "";
        display: table;
        clear: both;
    }
    </style>
</head>

<body>
    <div class="container">
        @include('header')

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="1.jpg">
                    <img src="./emoji/1.jpg" alt="Designing" width="600" height="400">
                </a>
                <div class="Data">Designing</div>
            </div>
        </div>


        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="2.jpg">
                    <img src="./emoji/2.jpg" alt="Development" width="600" height="400">
                </a>
                <div class="Data">Development</div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="3.jpg">
                    <img src="./emoji/3.jpg" alt="Full stack" width="600" height="400">
                </a>
                <div class="Data">Full stack</div>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="4.jpg">
                    <img src="./emoji/77.jpg" alt="Graphic" width="600" height="400">
                </a>
                <div class="Data">Graphic</div>
            </div>
        </div>

        <div class="clearfix"></div>


        <!-- <div class="pic">
       
    <img src="./emoji/1.jpg" alt="">
    <img src="./emoji/2.jpg" alt="">
    <img src="./emoji/3.jpg" alt="">
    <img src="./emoji/4.jpg" alt=""> 
   
    <img src="./emoji/6.jpg" alt="" style="height: 200px; width:200px;">
    </div> -->
    </div>
</body>

</html>