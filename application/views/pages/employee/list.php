<html>
<head>
<title>Display records</title>
</head>
 
<body>
  <a href="http://localhost/2020/ciTutorial/studentstutorial/employee/savedata/">create</a>
<table border="1" cellspacing="5" cellpadding="5">
  <tr style="background:#CCC">
    <th>Sr No</th>
    <th>First_name</th>
    <th>Last_name</th>
    <th>Email Id</th>
	  <th>#</th>
  </tr>
<?php
  $i=1;
  foreach($fetchEmployee as $row): ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $row['first_name']; ?></td>
    <td><?php echo $row['last_name']; ?></td>
    <td><?php echo $row['email']; ?></td>
    <td><a href="viewEmployee?id=<?php echo $row['id']; ?>">View</a> | <a href="updateEmployee?id=<?php echo $row['id']; ?>">Edit</a> | <a href="deleteEmployee?id=<?php echo $row['id']; ?>">Delete</a></td>
  </tr>
  
<?php 
  $i++; 
  endforeach 
?>
</table>