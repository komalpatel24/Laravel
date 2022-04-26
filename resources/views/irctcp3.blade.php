<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>irctcp3</title>
   </head>
<body>
    <form action="" >
        <fieldset style="width: 43%;">
            <div><h1  style="display: inline;">Create Your account</h1> <span style="color: orange; margin-left: 220px;"><u>SIGN IN</u></span></div><br>
    <div style=" padding:15px; font-size:22px;display:flex;">
     <a href="irctcp1" style="padding:16px;text-decoration: none; color: black;"><b>Basic Details</b></a> 
         <a href="irctcp2" style="padding:22px;text-decoration: none; color: black;"><b>Personal Details</b></a> 
             <a href="irctcp3" style="padding:22px;text-decoration: none; color: black"><b>Address</b></a>
        </div><hr><br>
        
        <input type="text" id="add" name="add" placeholder="Flat/Door/Block No. "style="height:24px;width:220px;" autofocus required>
        <input type="text" id="num" name="num" placeholder="Street/Lane(optional)"style="height:24px;width:220px;margin-left:20px;" required><br><br>
        <input type="text" id="add" name="add" placeholder="Area/Locality(optional)"style="height:24px;width:220px;"  required>
        <input type="number" id="num" name="num" placeholder="Pin Code"style="height:24px;width:220px;margin-left:20px;" required><br><br>
        <input type="text" id="State" name="State" placeholder="State" style="height:24px;width:220px;"  required>
        <select name="Select a City" id="Select a City" -placeholder="Select a City" style="height:29px;width:225px;margin-left:20px;">
            <option value="Select a City">Select a City</option>
        </select><br><br>
        <select name="Select a Post office" id="Select a Post office" placeholder="Select a Post office" style="height:29px;width:225px;">
            <option value="Select a Post office">Select a Post office</option>
        </select>
        <input type="number" id="Phone" name="Phone" placeholder="Phone" min="10" max="10" style="height:24px;width:220px;margin-left:20px;" required><br><br>
        <label for="text"><b>Copy Residence to office <br> Address</b></label><br>
        <input type="radio" id="radio" name="option">
        <label for="yes">Yes</label>
        <input type="radio" id="radio" name="option">
        <label for="No">No</label>
        <br><br>
        <input type="checkbox" id="info" name="info" placeholder="info" required>
        <label for="info">Please inform me about IRCTC Co-branded credit card through <br>
            &nbsp; &nbsp; &nbsp; Phone/Email/SMS (Optional)</label><br><br>
             <label for="info2"> &nbsp; &nbsp; &nbsp;Book free Railway tickets using Reward Points and Enjoy Zero <br>
                &nbsp; &nbsp; &nbsp;payment gateway charge with IRCTC SBI Card</label>
                <br><br>
        <input type="checkbox" id="Note" name="Note" placeholder="Note" required>
        <label for="Note"> I have read and agree with the <a href="https://contents.irctc.co.in/en/Terms%20and%20conditions.pdf"> Terms and Conditions.</a> and also <br>
            &nbsp; &nbsp; &nbsp; agree to receive promotional emails/SMS/offers/announcements <br>
            &nbsp; &nbsp; &nbsp; from IRCTC & associated partners</label><br><br>
        <input type="reset" value="Back"style="margin-left:20px;height:35px;width:70px;"> 
        <input type="submit" value="Continue ->" style="background-color: #ff6600; color: white;margin-left:330px;height:35px; ">
</fieldset>      
</form>
</body>
</html>