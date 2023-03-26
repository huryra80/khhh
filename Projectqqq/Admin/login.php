<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
</head>
<body>
    <div align="center">
        <?php
        $email = $password ="";
        $error_email=$error_password="";


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $error_email = "Name is email";
  } else {
    $name =$_POST["email"];
  }
  
  if (empty($_POST["password"])) {
    $error_password = "Enter your currect password";
  } else {
    $email = $_POST["email"];
  }
 
}
        
        ?>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <table>
                <h1 style="text-align: center;">Admin Login</h1>
                <tr>
                    <td>
                        <fieldset>
                         <legend><b>login:</b></legend>
                           <table>
                                <tr>
                                    <th><label for="email">email: </label></th>
                                    <td><input type="text" name="email" id="email">
                                    <span class="error">* <?php echo $error_email;?></span></td>
                                    <?php
                                        if(isset($_SESSION['msg_email'])){
                                            echo $_SESSION['msg_email'];
                                            unset($_SESSION['msg_email']);
                                        }
                                    ?>
  
                                </tr>
                                <tr>
                                    <th><label for="password">password: </label></th>
                                    <td><input type="text" name="password" id="password">
                                    <span class="error">* <?php echo $error_password;?></span></td>
                                                                <?php
                                        if(isset($_SESSION['msg_pass'])){
                                            echo $_SESSION['msg_pass'];
                                            unset($_SESSION['msg_pass']);
                                        }
                                    ?>
                                                                
   
                                </tr>
                                <tr>
                                    <td colspan="2" align="right">
                                    <button name="Submit" type="submit" value="Log In">Log In</button>
                                    </td>
                                </tr>
                            </table>
                            <p>Forget pass?<a href="reset_pass.php"> Forget pass?</a></p>
                            <p>Not have account?<a href="registration.php"> Register</a></p>
                             <?php echo $email;?>
                            <?php echo $password;?>
                        </fieldset>
                       
                        
                                
                    </td>
                    </tr>
            </table>
        </form>
        <?php
        if(isset($_SESSION['global_msg'])){
            echo $_SESSION['global_msg'];
            unset($_SESSION['global_msg']);
        }
    ?>

    </div>
</body>
</html> 