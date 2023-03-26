  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
</head>
<body>
    <h1>Reset Password</h1>

    <form action="../../controllers/admin/ForgotpassAction_admin.php" method="post" novalidate>
        <label for="email">Email : </label>
        <input type="email" name="email" id="email" value="">
        <br>
       
        <br>
        <label for="security_ques">Security Question : </label>
        <select name="security_ques" id="security_ques">
            <option value="" >Select here </option>
            <option value="What is the last name of the teacher who gave you your first failing grade?" >What is the last name of the teacher who gave you your first failing grade?</option>
            <option value="What is your pets name?" >What is your pet's name?</option>
            <option value="In what year was your father born?" >In what year was your father born?</option>
        </select>
        <br>
        
        <br>

        <label for="security_ans">Security Answer : </label> 
        <input type="text" name="security_ans" id="security_ans">
        <br>
        
        <br>

        <label for="npass">New Password : </label>
        <input type="password" id="npass" name="npassword">
        <br>
       
        <br>

        <label for="cpass">Confirm New Password : </label>
        <input type="password" id="cpass" name="cpassword">
        <br>
        
        <br>
        <input type="submit" value="Reset Password">
    </form>
   
</body>
</html>