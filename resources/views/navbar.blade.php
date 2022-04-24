<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav</title>
</head>
<body>
    <form action="irctcSecondPage.html">
        <fieldset style="width: 43%; ">
       <div><h1  style="display: inline;">Create Your account</h1> <span style="color: orange; margin-left: 225px;"><u>SIGN IN</u></span></div><br>
       <div style=" padding:15px; font-size:22px;display:flex;">
        <a href="nav" style="padding:16px;text-decoration: none; color:black;"><b>Basic Details</b></a> 
            <a href="np2" style="padding:22px;text-decoration: none; color:black;"><b>Personal Details</b></a> 
                <a href="np3" style="padding:22px;text-decoration: none; color:black"><b>Address</b></a>
           </div><hr><br>

       <p><b>GARBAGE/JUNK VALUES IN PROFILE MAY LEAD TO DEACTIVATION</b><br>
        Please use a valid E-Mail ID and mobile number in registration.</p>
        <input for="text" id="UName" name="UName"   size="70" placeholder="User Name"style="height:25px;" autofocus required> <br><br>
        <input for="password" id="password" name="password"  size="70" placeholder="password"style="height:25px;" required><br><br>
        <input for="Cpassword" id="Cpassword" name="Cpassword"  size="70" placeholder="Confirm Password"style="height:25px;" required><br><br>
        <select name="Preferred Language" id="Language"  style="width:450px;height:25px;" placeholder="Preferred Language" required >
            <option value="Preferred Language" selected >Preferred Language</option>
            <option value="Hindi">Hindi</option>
            <option value="English">English</option>
            <option value="Gujarati">Gujarati</option>
        </select><br><br>
        <select name="Security Questions" id="Security Questions"  style="width:450px;height:25px;" placeholder="Security Questions" required>
            <option value="Security Questions" selected >Security Questions</option>
            <option value="1">What is your pet name?</option>
            <option value="2"> What was the name of your first school?</option>
            <option value="3"> Who was your Childhood hero?</option>
            <option value="4"> What is your favorite past-time?</option>
            <option value="5">What is your all time favorite sports team?</option>
            <option value="6"> What is your fathers middle name?</option>
            <option value="7"> What make was your first car or bike?</option>
            <option value="8"> Where did you first meet your spouse?</option>
        </select><br><br>

        <input for="text" id="Security Answer" name="Security Answer"size="70"placeholder="Security Answer" required style="height:25px;">
        <br><br>
        <input type="reset" value="Cancel" style="margin-left:20px;height:35px;width: 70px;"> 
        <input type="submit" value="Continue ->" style="background-color: #ff6600; color: white;margin-left:330px;height:35px; ">

       

    </fieldset>
    </form>
</body>
</html>