<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        body {
            font-family: sans-serif;
        }
        
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 style="font-size:60px;">API DATA</h1>
            </div>
        </div>
    </div>
    <br>

    <div class="container">
        <table class="table">
            <thead>
                <tr style="background-color: black; color:white; font-size:20px;">
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                @foreach($collection as $item)
                <tr>
                    <td>{{$item['id']}}</td>
                    <td>{{$item['first_name']}}</td>
                    <td>{{$item['email']}}</td>
                    <td><img src={{$item['avatar']}} height="50px" /></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>