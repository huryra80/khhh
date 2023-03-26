<?php
 session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Registration Page
        </title>
    </head>
    <body>
        <div align="center">
            <h1>Registration Page</h1>
            <?php
            $error_fname=$error_lname=$error_uname=$error_email=$error_phn=$error_password=$error_cpassword=$error_male=$error_Date=$error_bgrp="";
            $fname =$lname=$uname=$email=$php=$password=$cpassword=$male=$date=$bgrp="";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $error_fname = "First Name is required";
  } else {
    $fname = test_input($_POST["fname"]);
  }
}
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["lname"])) {
    $error_lname = "Last Name is required";
  } else {
    $lname = test_input($_POST["lname"]);
  }
}
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["uname"])) {
    $error_uname = "User Name is required";
  } else {
    $uname = test_input($_POST["uname"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["email"])) {
    $error_email = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["php"])) {
    $error_phn = "Phone is required";
  } else {
    $phn = test_input($_POST["phn"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"])) {
    $error_password = "Name is required";
  } else {
    $password = test_input($_POST["password"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["cpassword"])) {
    $error_cpassword = "Name is required";
  } else {
    $cpassword = test_input($_POST["cpassword"]);
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["male"])) {
    $error_male = "Name is required";
  } else {
    $male= test_input($_POST["male"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["date"])) {
    $error_Date = "Name is required";
  } else {
    $date= test_input($_POST["date"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["bgrp"])) {
    $error_bgrp = "Name is required";
  } else {
    $bgrp= test_input($_POST["bgrp"]);
  }
}


            ?>
            <table>
                <tr>
                    <td>
                        <fieldset>
                            <Legend>General Information:</Legend>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                                <table>
                                    <tr>
                                        <th><label for="fname">First Name</label></th>
                                        <td>: <Input type="text" name="fname" id="fname"></Input>
                                            <span class="error">* <?php echo $error_fname;?></span></td>
                                           <?php
                                            if(isset($_SESSION['msg_fname'])){
                                                echo $_SESSION['msg_fname'];
                                                unset($_SESSION['msg_fname']);
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th><label for="lname">Last Name</label></th>
                                        <td>: <Input type="text" name="lname" id="lname"></Input>
                                            <span class="error">* <?php echo $error_lname;?></span></td>
                                             <?php
                                            if(isset($_SESSION['msg_lname'])){
                                                echo $_SESSION['msg_lname'];
                                                unset($_SESSION['msg_lname']);
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th><label for="uname">User Name </label></th>
                                        <td>: <Input type="text" name="uname" id="uname"></Input>
                                            <span class="error">* <?php echo $error_uname;?></span></td>
                                             <?php
                                            if(isset($_SESSION['msg_uname'])){
                                                echo $_SESSION['msg_uname'];
                                                unset($_SESSION['msg_uname']);
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th><label for="email">Email </label></th>
                                        <td>: <Input type="text" name="email" id="email"></Input>
                                        <span class="error">* <?php echo $error_email;?></span></td>
                                      <?php
                                            if(isset($_SESSION['msg_email'])){
                                                echo $_SESSION['msg_email'];
                                                unset($_SESSION['msg_email']);
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th><label for="phn">Phone Number</label> </th>
                                        <td>: <input type="text" name="phn" id="phn">
                                            <span class="error">* <?php echo $error_phn;?></span></td>
                                             <?php
                                            if(isset($_SESSION['msg_phn'])){
                                                echo $_SESSION['msg_phn'];
                                                unset($_SESSION['msg_phn']);
                                            }
                                        ?>
                                    </tr>
                                    <tr>
                                        <th><label for="password">Password</label></th>
                                        <td>: <input type="text" name="Password" id="Password"</input>
                                            <span class="error">* <?php echo $error_password;?></span></td>
                                            <?php
            if(isset($_SESSION['msg_password'])){
                echo $_SESSION['msg_password'];
                unset($_SESSION['msg_password']);

            }
            ?>
                                    </tr>
                                    <tr>
                                        <th><label for="cpassword">Conform Password</label></th>
                                        <td>: <input type="text" name="Conform Password" id="Conform Password"</input>
                                            <span class="error">* <?php echo $error_cpassword;?></span></td>
                                            <?php
            if(isset($_SESSION['msg_cpassword'])){
                echo $_SESSION['msg_cpassword'];
                unset($_SESSION['msg_cpassword']);
            }
        ?>
                                    </tr>
                                    <tr>
                                        <th><label for="male">Gender </label> </th>
                                        <td>:
                                            <input type="radio" id="male" name="gender" value="Male">
                                            <label for="Male">Male</label>
                                            <input type="radio" id="female" name="gender" value="Female">
                                            <label for="Female">Female</label>
                                            <input type="radio" id="other" name="gender" value="other">
                                            <label type="radio">otner</label>
                                            <span class="error"> <?php echo $error_male;?></span>
                                            <?php
            if(isset($_SESSION['msg_male'])){
                echo $_SESSION['msg_male'];
                unset($_SESSION['msg_male']);
            }
        ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><label for="date">Date of Birth</label></th>
                                        <td>: <input type="date" id="date">
                                           <span class="error"> <?php echo $error_Date;?></span></td>
                                           <?php
            if(isset($_SESSION['msg_dob'])){
                echo $_SESSION['msg_dob'];
                unset($_SESSION['msg_dob']);

            }
            ?>
                                    </tr>
                                    <tr>
                                        <th><label for="bgrp">Blood Group</label> </th>
                                        <td>: <select name="bgrp" id="bgrp">
                                            <option value=""></option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                          </select>
                                      <span class="error"> <?php echo $error_bgrp;?></span></td>
                                      <?php
            if(isset($_SESSION['msg_bgrp'])){
                echo $_SESSION['msg_bgrp'];
                unset($_SESSION['msg_bgrp']);
            }
        ?>
                                    </tr>
                                    <tr>
                                        <th><label for="address">Address</label> </th>
                                        <td>: <input type="text" name="Address" id="Address">
                                            <?php
            if(isset($_SESSION['msg_address'])){
                echo $_SESSION['msg_address'];
                unset($_SESSION['msg_address']);
            }
        ?>
                                         
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                             
                                        <button name="submi" type="submi" value="Log In">Register</button>
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
                            <p>Have an account?<a href="login.php"> login</a></p>
                            <?php
                                echo $fname;
                                echo $lname;
                                echo $uname;
                                echo $email;
                                echo $php;
                                echo $password;
                                echo $cpassword;
                                echo $male;
                                echo $date;
                                echo $bgrp;

                                ?>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>