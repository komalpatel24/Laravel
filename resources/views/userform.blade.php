<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container m-5 p-5 mx-auto border bg-secondary shadow">
        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        @endif -->
        <form action="users" method="POST">
            @csrf
            <div class="form-group">
                <label for="">username</label>
                <input type="text" name="userName" class="form-control">
                <small class="form-text  text-danger"> @error('userName'){{$message}} @enderror </small>
            </div>
            <div class="form-group">
                <label for="">password</label>
                <input type="password" name="password" class="form-control">
                <small class="form-text  text-danger">@error('password'){{$message}}@enderror</small>
            </div>
            <div class="form-group">
                <button class="btn btn-dark">submit</button>
            </div>
        </form>
    </div>





</body>

</html>