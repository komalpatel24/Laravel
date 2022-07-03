<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> 
  <style>
      *{
          margin: 0px;
          padding: 0px;
      }
     
      .head{
          background-color:rgb(77, 77, 77);
      }
      .container{
        margin-top: 5%;
          margin-bottom: 5%;
      }
      .container-fluid a{
          color: white;
          
      }
     body{
        background-image: url(../emoji/Registration-1.jpg);
        background-repeat: no-repeat; 
        background-size:cover;
     }
          button,
                 input[type=submit], 
                input[type=reset]{
                /* display: inline-block; */
                font-size: 12px;
                letter-spacing: 1px;
                cursor: pointer;
                box-shadow: inset 0 0 0 0 #2d5986;
                transition: .3s;
                }
             button:hover,
             input[type=submit],
            input[type=reset]:hover{
            color: #ffffff;
            box-shadow: inset 100px 0 0 0 #2d5986;
            }
  </style>
</head>

<body>
   @include('nav')
   <div class="container" style="background-color:rgba(0, 0, 0, 0.6);">
     <!-- <div class="container  border shadow" style="background-image: url(../emoji/Registration-1.jpg);
    background-repeat: no-repeat;  background-size:cover;">  -->
        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        @endif -->
        <form action="userform" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 style="text-align: center; color:white;">Registration</h1><br>
            <div class="row">
                <div class="col col-sm-6">
                    <div class="form-group text-light">
                        <label for="" style="color: white;">First Name</label>
                        <input type="text" name="firstname" placeholder="First Name" autofocus class="form-control">
                        <small class="form-text  text-danger">@error('firstname'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="form-group text-light">
                        <label for=""style="color: white;">Last Name</label>
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                        <small class="form-text  text-danger">@error('lastname'){{$message}}@enderror </small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-6">
                    <div class="form-group text-light">
                        <label for=""style="color: white;">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        <small class="form-text  text-danger">@error('password'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="form-group text-light">
                        <label for=""style="color: white;">Confirm_password</label>
                        <input type="password" name="confirm_password" placeholder="Confirm_password" class="form-control">
                        <small class="form-text text-danger">@error('confirm_password'){{$message}}@enderror</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-5">
                    <div class="form-ckeck text-light">
                        <label for="courses" style="color: white;">COURSES </label>
                            <select name="courses" class="form-control" id="department">
                                <option value="" selected disabled>-->Choose Courses--</option>
                                <option value="Full Stake">Full Stake</option>
                                <option value="Web Designing">a Web Designing</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Video Editing">Video Editing</option>
                                <option value="CCC">CCC</option>
                                <option value="Tally">Tally</option>
                               
                            </select>
                            <small class="form-text text-danger">@error('courses'){{$message}}@enderror</small>
                 </div>
            </div>
                <div class="col col-sm-3">
                    <div class="form-group" style="margin-left: 50px;">
                        <label for="" style="color: white;" >  Gender :</label> <br>
                        <!-- <div class="custom-control custom-radio custom-control-inline"> -->
                            <input type="radio" name="gender" value="male" style="margin-left: 30px;margin-top:5px;"><label for=""style="color: white;margin-left:15px;margin-top:5px;"> Male </label> <br>
                            <input type="radio" name="gender" value="female" style="margin-left: 30px;margin-top: 8px;"><label for=""style="color: white;margin-left: 15px;margin-top: 8px;"> Female </label>
                            <!-- <input type="radio" class="form-control" value="Male" name="gender">
                            <label style="color: #0040ff;">Male</label>
                        </div> <br>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" class="form-control" value="Female" name="gender">
                            <label style="color: #0040ff;">Female</label>
                        </div> -->
                        <small class="form-text text-danger">@error('gender'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col col-sm-4">
                    <div class="form-group text-light" >
                        <label for="" style="color: white;">Age</label>
                        <input type="number" name="age" placeholder="Age" class="form-control" >
                        <small class="form-text text-danger">@error('age'){{$message}}@enderror</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-6">
                    <div class="form-group text-light">
                        <label for=""style="color: white;">Date Of Birth</label>
                        <input type="date" class="form-control" placeholder="Date Of Birth" name="date_of_birth">
                        <small class="form-text text-danger">@error('date_of_birth'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col col-sm-6">
                    <div class="form-group text-light">
                        <label for=""style="color: white;">Qualification</label>
                        <input type="text" class="form-control" placeholder="Qualification" name="qualification">
                        <small class="form-text text-danger">@error('qualification'){{$message}}@enderror</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-sm-5">
                    <div class="form-group text-light">
                        <label for=""style="color: white;">Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control">
                        <small class="form-text text-danger">@error('email'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col col-sm-3">
                    <div class="form-group text-light">
                        <label for="" style="color: white; margin-left:10px;">Mobile_No</label>
                        <input type="text" name="mobile_no" placeholder="Mobile_No" class="form-control">
                        <small class="form-text text-danger">@error('mobile_no'){{$message}}@enderror</small>
                    </div>
                </div>
         
        <div class="col col-sm-4">
             <div class="form-group">
                    <label for=""  style="color: white;">Image :</label>
                    <div class="custom-file">
                        <input type="file" name="Imagefile" class="form-control">
                        <label for=""  style="color: white;" >Choose image file</label>
                        <span>@error('Imagefile'){{$message}}@enderror</span>
                    </div>
           </div>
        </div>
    </div>
   
     <div class="form-group">
                <input type="checkbox" value=""  style="color: white; "> <label style="color:white;"> Remember me</label>
            <div class="form-group">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button type="submit" class="btn btn-dark" style="background-color: #001f33; color:white;">Submit</button>
               <p style="color: white;"> Already have an account <a href="login" style="background-color:white;">Login here</a></p>
            </div>
     </div> 
 </form>
</div>
</body>

</html>