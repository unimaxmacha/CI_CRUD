<?php
	
	$connect = mysqli_connect("localhost", "root", "", "bookworm");
	$output = '';

	if(isset($_POST["query"]))
	{
		$search = mysqli_real_escape_string($connect, $_POST["query"]);
		$query = "
					SELECT * FROM category
					WHERE name LIKE '%".$search."%' 
				";
	}
	else 
	{
		$query = "SELECT * FROM category ORDER BY id";
	}
	$result = mysqli_query($connect, $query);

	if(mysqli_num_rows($result) > 0)
	{
		$output .= '
			<div class="table-responsive">
				<table class="table table bordered">
					<tr>
						<th>Book Name</th>
					</tr>
		';
		while ($row = mysqli_fetch_array($result)) 
		{
			$output .= '
				<tr>
					<td><a href="../select_category.php?cat='.$row["id"].'">'.$row["name"].'</a></td>
				</tr>
			';
		}
		echo $output;
	}
	else
	{
		echo "Data not found.";
	}

	echo "</table>";
	echo "</div>";
?>