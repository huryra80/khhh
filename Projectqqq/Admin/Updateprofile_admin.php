<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Updateprofile Admin</title>
</head>
<body>
	<div>
		<h1>Updateprofile Admin</h1>
		<table>
			<tr>
				<td>
					<fieldset>
						<legend>Update Information:</legend>
						<form action="" method="post">
							<table>
									 <tr>
                                        <th><label for="fname">First Name</label></th>
                                        <td>: <Input type="text" name="fname" id="fname"></Input>
                                    </tr>
                                    <tr>
                                        <th><label for="lname">Last Name</label></th>
                                        <td>: <Input type="text" name="lname" id="lname"></Input>
                                    </tr>
                                    <tr>
                                        <th><label for="email">Email</label></th>
                                        <td>: <Input type="text" name="email" id="email"></Input>
                                    </tr>
                                    <tr>
                                        <th><label for="phn">Phone number</label></th>
                                        <td>: <Input type="text" name="phn" id="phn"></Input>
                                    </tr>
                                    <tr>
                                        <th><label for="address">Address</label></th>
                                        <td>: <Input type="text" name="address" id="address"></Input>
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
                                    </tr>
                                    <tr>
                                        <th><label for="date">Date of Birth</label></th>
                                        <td>: <input type="date" id="date">
                                    </tr>
                                     <tr>
                                        <td colspan="3" align="right">
                                             
                                        <button name="submi" type="submi" value="Save">Save</button>
                                    </td>
                                </tr>
							</table>
						</form>

					</fieldset>
				</td>
			</tr>
		</table>
	</div>

</body>
</html>