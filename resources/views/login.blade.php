<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
</head>
<body>
     @include('header')
<div class="container  border shadow" style="background-image: url(../emoji/Registration-1.jpg);
    background-repeat: no-repeat;  background-size:cover;">
    
    <form action="" method="POST"enctype="multipart/form-data">
    @csrf
    <h1 style="text-align:center;">Login</h1><br>
           <div class="form-group text-light">
                        <label for="" style="color: white;">username</label>
                        <input type="text" name="username" placeholder="UserName" autofocus class="form-control">
                        <small class="form-text  text-danger">@error('username'){{$message}}@enderror</small>
         </div>
         <div class="form-group text-light">
                        <label for="" style="color: white;">password</label>
                        <input type="password" name="password" placeholder="password" class="form-control">
                        <small class="form-text  text-danger">@error('password'){{$message}}@enderror</small>
         </div>
         <div class="form-group">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button class="btn btn-dark">submit</button>
                <p style="color: white;"> Don't have an account <a href="registration">Registration</a></p>
            </div>
            </form>
            </div>
</body>
</html>