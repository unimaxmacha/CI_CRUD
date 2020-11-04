<!DOCTYPE html>
<html>
<head>
	<title>Employee Registration Form</title>
</head>
<body>
	<h3>Edit Employee Details</h3>
	<hr>
	<?php
		foreach($empDetail as $row) 
		{
	?>
	<form method="post">
		<input type="hidden" name="empId" value="<?php echo $row->id; ?>">
		<table width="800" border="1" cellspacing="5" cellpadding="5">
			<tr>
				<td width="230">First Name: </td>
				<td width="329"><input type="text" name="fname" value="<?php echo $row->first_name; ?>"></td>
			</tr>
			<tr>
				<td width="230">Last Name: </td>
				<td width="329"><input type="text" name="lname" value="<?php echo $row->last_name; ?>"></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email" value="<?php echo $row->email; ?>"></td>
			</tr>
			<tr>
				<td>Mobile: </td>
				<td><input type="text" name="mobile" value="<?php echo $row->mobile; ?>"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" name="update" value="Update Record"></td>
			</tr>
		</table>
	</form>
	<?php
		}
	?>
</body>
</html>