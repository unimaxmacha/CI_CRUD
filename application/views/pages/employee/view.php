<!DOCTYPE html>
<html>
<head>
<title>Update Data</title>
</head>
 
<body>
 <?php
  $i=1;
  foreach($getEmpId as $row) :?>
 
	<form method="post">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Name: </td>
    <td width="329"><?php echo$row['first_name']; ?></td>
  </tr>
  <tr>
    <td>Lastname: </td>
    <td><?php echo $row['last_name']; ?></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td><?php echo $row['email']; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><a href="updateEmployee?id=<?php echo $row['id']; ?>">Edit</a>&nbsp;<a href="displayAllEmployee">Cancel</a></td>
  </tr>
</table>
	</form>
	<?php endforeach ?>
</body>
</html>