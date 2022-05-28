<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Designing</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
       *{
           margin: 0px;
           padding: 0px;
       }
       
        .info p{
            font-size: 50px;
           margin-left: 10px;
            
        }
        
        .info{
            background-image:linear-gradient(to right, #404040,#5c8a8a);
            color: white;
        }
        button,
                 input[type=submit] {
                display: inline-block;
                border-radius: 10px;
                cursor: pointer;
                box-shadow: inset 0 0 0 0 #009999;
                transition: .3s;
                }
             button:hover,
             input[type=submit]:hover{
            color: #ffffff;
            box-shadow: inset 100px 0 0 0 #009999;
            }
            .data{
                margin-top: 3%;
                margin-left: 5%;
            }
            .head a:hover{
                        background:rgb(128, 128, 128);
                        color: #fff;
            }
            .detail{
                color: darkblue;
                margin-left: 25%;
            }
            .head {
                background-color: #404040;
            }
            /* .copy{
                font-size: 0.5px;
            } */
        </style>
</head>
<body>
   @include('nav')
    
      <div class="info">
          <div class="row">
                <div class="col col-sm-8 text-center p-3" >
            
                        <p><b>Web Designing</b></p>
                         <span> જો આપ એક વિધાર્થી છો અને ક્રિએટીવ માઇન્ડ ધરાવો છો તો Web Designing આપના માટે શ્રેષ્ઠ ફિલ્ડ પુરવાર થઈ શકે છે. <br>
                         વધુ માહિતી મેળવવા તેમજ  આપના માટેની ખાસ ઓફર જાણવા નીચેના બટન પર ક્લિક કરો. <br>
                         Website એ આજના સમયની જરૂરીયાત અને અનિવાર્યતા છે.   <br>
                              તો કેમ તેને કરિયર તરીકે પસંદ ન કરીએ? <br>
                             </span>
                            <div class="p-5">
                            <button  type="submit" style="  height: 35px; width: 100px;">
                              <a href="registration" style=" text-decoration: none;"> Click here</a></button>
                              </div>
                </div>
            
                <div class="col col-sm-4">
                    <img src="../emoji/WEB DESIGNING INSTA AD .jpg" alt="designing" height="350px"; width="400px";>
                </div>
         </div>
   </div>
      
            <div class="data">
                <h1>તમે શું શીખી શકશો ?</h1>
                <ol>
                    <li>તમે શરૂઆતથી વેબ ડિઝાઇનિંગ શીખી શકશો.</li>
                    <li>અદ્ભુત પ્રોફેશનલ વેબસાઇટ્સ ડિઝાઇન કરવા માટે તમને જરૂરી તમામ કૌશલ્ય તમે શીખી શકશો.</li>
                    <li>Adobe Photoshop, Adobe Illustrator અને Adobe XD જેવા ડિઝાઈનિંગ સોફ્ટ્વેર શીખી શકશો.</li>
                    <li>તમે વેબ ડિઝાઇન માટે HTML, CSS, Javascript, Jquery, Bootstrep, Media Query વગેરે શીખી શકશો.</li>
                    <li>તમે 3 મેગા પ્રોજેક્ટ્સ સાથે આધુનિક ટેમ્પલેટ્સ બનાવવાનું શીખી શકશો.</li>
                    <li>તમે એક આકર્ષક વેબસાઈટ વિકસાવવામાં સમર્થ હશો.</li>
                    <li>રિસ્પોન્સિવ વેબ ડિઝાઇન શીખી શકશો.</li>
                </ol>
            </div>

            <div class="detail">
                <h1>Course Content</h1> <br>
                <ul style="position: relative; left:25px;">  <h4>LANGUAGES TO LEARN</h4>      
                <li>HTML</li>
                <li>HTML5</li>
                <li>CSS</li>
                <li>CSS3</li>
                <li>SASS</li>
                <li>LESS</li>
                <li>MEDIA QUERY</li>
                <li>BHOOTSTRAP</li>
                <li>JAVASCRIPT</li>
                <li>JQUERY</li>
                </ul>

                <ul style="position: relative; left:450px; bottom:250px">
                    <h4>APPLICATION TO USE</h4>
                    <li>PHOTOSHOP </li>
                    <li>ILLUSTRATOR</li>
                    <li>ADOBE XD</li>
                    <br>
                    <h4>SKILL ENHANCE</h4>
                    <li>SPOKEN ENGLISH</li>
                    <li>PERSONALITY DEVELOPMENT</li>
                    <li>FREELANCING</li>
                </ul>
            </div>

<!-- <div class="copy">
    <h3>Copyright © 2022 Angel Multimedia Institute | Powered by Angel Multimedia Institute.</h3>
</div> -->
    
</body>
</html>