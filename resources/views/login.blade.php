<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container m-4 p-4 mx-auto border shadow "style="background-image: url(../emoji/Registration-1.jpg);
    background-repeat: no-repeat;  background-size:cover;">
    <form action="" method="POST">
    <h1 style="text-align:center;">Login</h1><br>
           <div class="form-group text-light">
                        <label for="">username</label>
                        <input type="text" name="username" placeholder="UserName" autofocus class="form-control">
                        <small class="form-text  text-danger">@error('username'){{$message}}@enderror</small>
         </div>
         <div class="form-group text-light">
                        <label for="">password</label>
                        <input type="text" name="password" placeholder="password" class="form-control">
                        <small class="form-text  text-danger">@error('password'){{$message}}@enderror</small>
         </div>
         <div class="form-group">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button class="btn btn-dark">submit</button>
            </div>
            </form>
            </div>
</body>
</html>