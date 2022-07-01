<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"> -->
    <style>
        .container{
            border: 1px solid black;
            margin-top: 8%;
            height: 50vh;
            background-color: rgba(0, 0, 0, 0.6);
        }
        label{
            color: white;
        }
        body{
            background-image: url(../emoji/Registration-1.jpg);
             background-repeat: no-repeat; 
            background-size:cover;
        }
    </style>
</head>

<body>
    <div class="n1">
     @include('header')
    <div class="container m-5 p-5 mx-auto border bg-secondary shadow">
        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        @endif -->
        
        <form action="login" method="POST">
        {{method_field('PUT')}}
            @csrf
            <div class="form-row" style="margin-top: 5%;">
                <div class="form-group">
                    <label for="">username</label>
                    <input type="text" name="username" class="form-control">
                    <small class="form-text  text-danger"> @error('username'){{$message}}@enderror </small>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="password" class="form-control">
                    <small class="form-text  text-danger">@error('password'){{$message}}@enderror</small>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group">
                    <button class="btn btn-dark">submit</button>
                </div>
            </div>
        </form>
    </div>
</div>    

</body>
</html>