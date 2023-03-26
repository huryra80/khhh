<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Add Student</title>
</head>
<body>
	<div align="center">
        <?php
        $error_fname=$error_lname=$error_email=$error_uname=$error_password=$error_gen=$error_selpotho=$error_address=$error_mobile=$error_dname=$error_coname="";
        $fname=$lname=$email=$uname=$password=$gen=$selpotho=$address=$mobile=$dname=$coname="";

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
  if (empty($_POST["email"])) {
    $error_email = "Email Name is required";
  } else {
    $email = test_input($_POST["email"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["password"])) {
    $error_password = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["selpotho"])) {
    $error_selpotho = "Selpotho is required";
  } else {
    $selpotho = test_input($_POST["selpotho"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["address"])) {
    $error_address = "write your address";
  } else {
    $address = test_input($_POST["address"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["mobile"])) {
    $error_mobile = "mobile is required";
  } else {
    $mobile = test_input($_POST["mobile"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["dname"])) {
    $error_dname = "depertment name is required";
  } else {
    $dname = test_input($_POST["dname"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["coname"])) {
    $error_coname = "mobile is required";
  } else {
    $coname = test_input($_POST["coname"]);
  }
}


        ?>
		<h1>Add Student</h1>
		<table>
			<tr>
				<td>
					<fieldset>
						<legend>Add Student</legend>
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<table>
								<tr>
									 <tr>
                                        <th><label for="fname">First Name</label></th>
                                        <td>: <Input type="text" name="fname" id="fname"></Input>
                                            <span class="error">* <?php echo $error_fname;?></span>
                                    </tr>
                                    <tr>
                                    	 <tr>
                                        <th><label for="lname">Last Name</label></th>
                                        <td>: <Input type="text" name="lname" id="lname"></Input>
                                            <span class="error">* <?php echo $error_lname;?></span>
                                    </tr>
                                    <tr>
                                    	 <tr>
                                        <th><label for="email">Email</label></th>
                                        <td>: <Input type="text" name="email" id="email"></Input>
                                            <span class="error">* <?php echo $error_email;?></span>
                                    </tr>
                                    <tr>
                                    	 <tr>
                                        <th><label for="uname">User Name</label></th>
                                        <td>: <Input type="text" name="uname" id="uname"></Input>
                                            <span class="error">* <?php echo $error_uname;?></span>
                                    </tr>
                                     <tr>
                                        <th><label for="password">Password</label></th>
                                        <td>: <Input type="text" name="password" id="password"></Input>
                                            <span class="error">* <?php echo $error_password;?></span>
                                    </tr>
                                    <tr>
                                        <th><label for="gen">Gender </label> </th>
                                        <td>:
                                            <input type="radio" id="gen" name="gender" value="Male">
                                            <label for="Male">Male</label>
                                            <input type="radio" id="female" name="gender" value="Female">
                                            <label for="Female">Female</label>
                                            <input type="radio" id="other" name="gender" value="other">
                                            <label type="radio">otner</label>
                                            <span class="error">* <?php echo $error_gen;?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                    	 <th><label for="selphoto">Select a photo: </label></th>
                                    	 <td>: <input type="file" name="selphoto" id="selphoto"></label></td>
                                         <span class="error">* <?php echo $error_selpotho;?></span>
                                    </tr>
                                    <tr>
                                    	 <tr>
                                        <th><label for="address">Address</label></th>
                                        <td>: <Input type="text" name="address" id="address"></Input>
                                            <span class="error">* <?php echo $error_address;?></span>
                                    </tr>
                                    <tr>
                                    	 <tr>
                                        <th><label for="mobile">Mobile</label></th>
                                        <td>: <Input type="text" name="mobile" id="mobile"></Input>
                                            <span class="error">* <?php echo $error_mobile;?></span>
                                    </tr>
								</tr>
								<tr>
                                        <th><label for="dname">Depertment Name</label> </th>
                                        <td>: <select name="dname" id="dname">
                                            <option value=""></option>
                                            <option value="CSE">CSE</option>
                                            <option value="EEE">EEE</option>
                                            <option value="BBA">BBA</option>
                                            <option value="CS">CS</option>
                                          </select>
                                          <span class="error">* <?php echo $error_dname;?></span>
                                </tr>
                                <tr>
                                    	 <tr>
                                        <th><label for="coname">course name</label></th>
                                        <td>: <Input type="text" name="coname" id="coname"></Input>
                                            <span class="error">* <?php echo $error_coname;?></span>
                                </tr>
                                <tr>
                                        <td colspan="2" align="right">
                                             
                                        <button name="submi" type="submi" value="add">add</button>
                                    </td>
                                </tr>

							</table>
						</form>
                        <?php
                        echo $fname;
                        echo $lname;
                        echo $email;
                        echo $uname;
                        echo $password;
                        echo $gen;
                        echo $selpotho;
                        echo $address;
                        echo $mobile;
                        echo $dname;
                        echo $coname;                                                                                            v
                        ?>
					</fieldset>
				</td>
			</tr>
		</table>
		
	</div>

</body>
</html>