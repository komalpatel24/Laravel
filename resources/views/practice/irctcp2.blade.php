<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irctcp2</title>
</head>
<body>
    <form action="irctcThirdPage.html">
        <fieldset style="width: 43%;">
            <div><h1  style="display: inline;">Create Your account</h1> <span style="color: orange; margin-left: 225px;"><u>SIGN IN</u></span></div><br>
            <div style=" padding:15px; font-size:22px;display:flex;">
                <a href="irctcp1" style="padding:16px;text-decoration: none; color: black;"><b>Basic Details</b></a> 
                    <a href="irctcp2" style="padding:22px;text-decoration: none; color: black;"><b>Personal Details</b></a> 
                        <a href="irctcp3" style="padding:22px;text-decoration: none; color: black"><b>Address</b></a>
                   </div><hr><br>

        <input type="text" id="fname" name="fname" placeholder="First Name" size="15"style="height:25px;" autofocus required> &nbsp; &nbsp; &nbsp; 
        <input type="text" id="Middle Name" name="Middle Name" placeholder="Middle Name" size="15"style="height:25px;" required> &nbsp; &nbsp; &nbsp; 
        <input type="text" id="Last Name" name="Last Name" placeholder="Last Name" size="15"style="height:25px;" required><br><br>
        <p><b>Info!Please provide your exact name as per Aadhaar to avail <br> 
            Aadhaar based benefits on IRCTC eTicketing website.</b></p>
         <select type="text" id="Select Occupation" name="Select Occupation" placeholder="Select Occupation" style="width:210px;height:29px;"required>
            <option value="Select Occupation">Select Occupation</option>
            <option value="1">GOVERNMENT</option>
            <option value="2">PUBLIC</option>
            <option value="3"> PRIVATE</option>
            <option value="4"> PROFESSIONAL</option>
            <option value="5">SELF EMPLOYED</option>
            <option value="6"> STUDENT</option>
            <option value="7">OTHER</option>
        </select> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="date" id="Date of Birth" name="Date of Birth" placeholder="Date of Birth" style="width:245px;height:29px;margin-left:40px;" required><br><br>
        <input type="radio" id="Married" name="Married" value="Married" required>
        <label for="Married">Married</label>&nbsp;&nbsp;
        <input type="radio" id="Unmarried" name="Married" value="Unmarried">
        <label for="Unmarried">Unmarried</label>
        <select name="india" id="india" style="height:32px;width:251px;margin-left:90px;" placeholder="india"required>
            <option value="1">India</option>
            <option value="2">Albania</option>
            <option value="3">Algeria</option>
            <option value="4">Bangladesh</option>
            <option value="5">Barbados</option>
            <option value="6">Belarus</option>
            <option value="7">Brazil</option>
            <option value="8">Canada</option>
            <option value="9">China</option>
            <option value="10">Fiji</option>
            <option value="11">Finland</option>
            <option value="12">France</option>
            <option value="13">Germany</option>
            <option value="14">Greece</option>
            <option value="15">Russia</option>
            <option value="16">Iran</option>
            <option value="17">Italy</option>
            <option value="18">Japan</option>
            <option value="19">North Korea</option>
        </select><br><br>

        <input type="radio" id="radio" name="Gender" value="Male" required>
        <label for="Male">Male</label>
        <input type="radio" id="radio" name="Gender" value="Female">
        <label for="Female">Female</label>
        <input type="radio" id="radio" name="Gender" value="Transgender">
        <label for="Transgender">Transgender</label>
        <input type="email" id="email" name="email"style="height:24px;width:244px;margin-left:275px;" placeholder="Email" required >
        <br><br>
        <input type="number" id="num" name="num" value="91"  style="background-color: rgb(134, 147, 160);width: 30px;height:25px;"  readonly >
        <input type="Mobile" id="Mobile" name="Mobile" placeholder="Mobile" min="10" max="10" style="width:130px;height:25px;margin-left:17px;"required>
        <select type="text" id="Select a Nationality" name="Select a Nationality"style="height:32px;width:252px;margin-left:78px;" placeholder="Select a Nationality" required>
            <option value="01">Select a Nationality</option>
            <option value="1">India</option>
            <option value="2">Albania</option>
            <option value="3">Algeria</option>
            <option value="4">Bangladesh</option>
            <option value="5">Barbados</option>
            <option value="6">Belarus</option>
            <option value="7">Brazil</option>
            <option value="8">Canada</option>
            <option value="9">China</option>
            <option value="10">Fiji</option>
            <option value="11">Finland</option>
            <option value="12">France</option>
            <option value="13">Germany</option>
            <option value="14">Greece</option>
            <option value="15">Russia</option>
            <option value="16">Iran</option>
            <option value="17">Italy</option>
            <option value="18">Japan</option>
            <option value="19">North Korea</option>
        </select>
       
        
        <br><br>
        <input type="reset" value="Back"style="margin-left:20px;height:35px;width:70px;"> 
        <input type="submit" value="Continue ->" style="background-color: #ff6600; color: white;margin-left:330px;height:35px; ">
    </form>
</body>
</html>