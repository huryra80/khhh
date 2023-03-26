<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add book</title>
</head>
<body>
	<div>
		<h1>Add Book</h1>
		<table>
			<tr>
				<td>
					<fieldset>
						<legend>Add Book:</legend>
						<form action="" method="post">
							<table>
									 <tr>
                                        <th><label for="isbn">ISBN</label></th>
                                        <td>: <Input type="text" name="isbn" id="isbn"></Input></td>
                                    </tr>
                                    <tr>
                                        <th><label for="auname">Author Name</label></th>
                                        <td>: <Input type="text" name="auname" id="auname"></Input></td>
                                    </tr>
                                    <tr>
                                        <th><label for="btitle">Email</label></th>
                                        <td>: <Input type="text" name="btitle" id="btitle"></Input>
                                    </tr>
                                    <tr>
                                        <th><label for="category"> category</label></th>
                                        <td>: <Input type="text" name="category" id="category"></Input></td>
                                    </tr>
                                    <tr>
                                        <th><label for="publisher">publisher</label></th>
                                        <td>: <Input type="text" name="publisher" id="publisher"></Input></td>
                                    </tr>
                                    <tr>
                                      	<th><label for="gbookurl">Google Book Url</label></th>
                                      	<td>: <input type="text" name="gbookurl" id="gbookurl"></input></td>
                                      </tr>
                                    <tr>
                                    	<th><label for="upbookimg">Upload Book Img</label></th>
                                    	<td>: <input type="file" name="selphoto" id="selphoto"></label></td>
                                    </tr>
                                    <tr>
                                    	<th><label for="uppdf">Upload Pdf</label></th>
                                    	<td>: <input type="file" name="selphoto" id="selphoto"></label></td>
                                    </tr>
                                    <tr>
                                      	<th><label for="exturl">External Url</label></th>
                                      	<td>: <input type="text" name="exturl" id="exturl"></input></td>
                                    </tr>
                                    <tr>
                                        <td colspan="2" align="right">
                                             
                                        <button name="submi" type="submi" value="add">Add</button></td>
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