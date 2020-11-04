<!DOCTYPE html>
<html>
<head>
	<title>Display Employee Records</title>
</head>
<body>
	<table>
		<tr>
			<td></td>
			<td colspan="4" style="text-align: right"><a href="registerEmployee">Add New Empoyee</a></td>
		</tr>
		<tr style="background: #CCC">
			<th>SNo</th>
		    <th>Name</th>
		    <th>Email</th>
		    <th>Mobile</th>
		    <th>#</th>
		</tr>

		<?php
		$i = 1;
		foreach ($empData as $row) {
			echo "<tr>";
				echo "<td>".$i."</td>";
				echo "<td>".$row->first_name.' '.$row->last_name."</td>";
				echo "<td>".$row->email."</td>";
				echo "<td>".$row->mobile."</td>";
				echo "<td><a href='viewEmployeeDetail?id=".$row->id."'>View</a>|<a href='updateEmployeeDetail?id=".$row->id."'>Update</a>|<a href='delecteEmpRecord?id=".$row->id."'>Delete</a></td>";
			echo "</tr>";
			$i++;
		}
		?>
	</table>
</body>
</html>