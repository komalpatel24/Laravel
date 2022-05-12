<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    
     <link rel="stylesheet" href="{{asset('css/home.css')}}">
    <style>
        body {
            font-family: sans-serif;
        }
        .table{
            background-color:rgb(89, 89, 89,0.6);
            border: 1px solid black;
        }
        .main{
           background-image: url('../emoji/bg4.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            width:100%;
            height:800px;
         }
          </style>
</head>

<body>
    <div class="main">
        @include('header')
     <div class="container">
    <h1 style="font-size:40px;">API DATA</h1>
    <br>
        <table class="table">
            <tr style="height:50px; font-size:20px;">
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>Photo</th>
                </tr>
               @foreach($collection as $data)
                <tr>
                    <td>{{$data['id']}}</td>
                    <td>{{$data['first_name']}}</td>
                    <td>{{$data['email']}}</td>
                    <td><img src={{$data['avatar']}} height="50px"></td>
                </tr>
                @endforeach
            
        </table>
    </div>
    </div>
</body>

</html>