<!DOCTYPE html>
<html>
<head>
	<title>Employee Registration Form</title>
</head>
<body>
	<h3>Employee Details</h3>
	<hr>
	<?php
		foreach($showEmpDetail as $row) 
		{
	?>
		<table width="800" border="1" cellspacing="5" cellpadding="5">
			<tr>
				<td width="230">First Name: </td>
				<td width="329"><?php echo $row->first_name; ?></td>
			</tr>
			<tr>
				<td width="230">Last Name: </td>
				<td width="329"><?php echo $row->last_name; ?></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><?php echo $row->email; ?></td>
			</tr>
			<tr>
				<td>Mobile: </td>
				<td><?php echo $row->mobile; ?></td>
			</tr>
			<tr>
				<td colspan="2" align="center"><a href='listEmployee'>Back</a></td>
			</tr>
		</table>
	<?php
		}
	?>
</body>
</html>