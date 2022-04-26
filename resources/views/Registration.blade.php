<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container m-4 p-4 mx-auto border shadow "style="background-image: url(../emoji/Registration-1.jpg);
    background-repeat: no-repeat;  background-size:cover; hight:100vh; width:100%; ">
        <!-- @if($errors->any())
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        @endif -->
        <form action="registration" method="POST" enctype="multipart/form-data">
            @csrf
            <h1 style="text-align: center;">Registration</h1><br>
            <div class="row">
                <div class="col sm-6">
                    <div class="form-group text-light">
                        <label for="" >First Name</label>
                        <input type="text" name="firstname" placeholder="First Name" autofocus class="form-control">
                        <small class="form-text  text-danger">@error('firstname'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col sm-6">
                    <div class="form-group text-light">
                        <label for="">Last Name</label>
                        <input type="text" name="lastname" placeholder="Last Name" class="form-control">
                        <small class="form-text  text-danger">@error('lastname'){{$message}}@enderror </small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col sm-6">
                    <div class="form-group text-light">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                        <small class="form-text  text-danger">@error('password'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col sm-6">
                    <div class="form-group text-light">
                        <label for="">Confirm_password</label>
                        <input type="password" name="confirm_password" placeholder="Confirm_password" class="form-control">
                        <small class="form-text text-danger">@error('confirm_password'){{$message}}@enderror</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col sm-5">
                    <div class="form-ckeck text-light">
                        <label for="department">Department </label>
                            <select name="department" class="form-control" id="department">
                                <option value="" selected disabled>-->Choose Department--</option>
                                <option value="FULL STAKE">Full Stake</option>
                                <option value="Designer">Designer</option>
                                <option value="Developer">Developer</option>
                                <option value="R & D">R&D</option>
                                <option value="HR">HR</option>
                                <option value="Marketing">Marketing</option>
                                <option value="Sales">Sales</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Shipping">Shipping</option>
                            </select>
                            <small class="form-text text-danger">@error('department'){{$message}}@enderror</small>
                        
                    </div>
                </div>
                <div class="col sm-3">
                    <div class="form-group ">
                        <label for="" class="text-light" style="margin-left: 90px;">  Gender:</label> <br>
                        <div class="custom-control custom-radio custom-control-inline text-light" style="margin-left:100px;">
                            <input type="radio" class="form-control" value="Male" name="gender">
                            <label>Male</label>
                        </div> <br>
                        <div class="custom-control custom-radio custom-control-inline text-light" style="margin-left: 100px;">
                            <input type="radio" class="form-control" value="Female" name="gender">
                            <label>Female</label>
                        </div>
                        <small class="form-text text-danger">@error('gender'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col sm-4">
                    <div class="form-group text-light" style="margin-right: 10px;">
                        <label for="" >Age</label>
                        <input type="number" name="age" placeholder="Age" class="form-control" >
                        <small class="form-text text-danger">@error('age'){{$message}}@enderror</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col sm-6">
                    <div class="form-group text-light">
                        <label for="">Date Of Birth</label>
                        <input type="date" class="form-control" placeholder="Date Of Birth" name="date_of_birth">
                        <small class="form-text text-danger">@error('date_of_birth'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col sm-6">
                    <div class="form-group text-light">
                        <label for="">Salary</label>
                        <input type="text" class="form-control" placeholder="Salary" name="salary">
                        <small class="form-text text-danger">@error('salary'){{$message}}@enderror</small>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col sm-6">
                    <div class="form-group text-light">
                        <label for="">Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control">
                        <small class="form-text text-danger">@error('email'){{$message}}@enderror</small>
                    </div>
                </div>
                <div class="col sm-6">
                    <div class="form-group text-light">
                        <label for="">Mobile_No</label>
                        <input type="text" name="mobile_no" placeholder="Mobile_No" class="form-control">
                        <small class="form-text text-danger">@error('mobile_no'){{$message}}@enderror</small>
                    </div>
                </div>
            </div>

            <div class="form-group text-light">
    <label><input type="checkbox" value="" >  Remember me</label>
    </div>
            <div class="form-group">
                <button type="reset" class="btn btn-warning">Reset</button>
                <button class="btn btn-dark">submit</button>
            </div>
        </form>
    </div>

</body>

</html>