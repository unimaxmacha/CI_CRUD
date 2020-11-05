<?php
if(!defined('MyConst')) {
   die('Direct access not permitted');
}

getServices($con);
?>
<?php
    if ($servicesNumRows > 0) {
		
		
        echo "<div class='row' id='books' style='height:400px'>";
		
		if (!empty($servicesHeading)) {
			echo "<div class='col-lg-12'>";
			echo "<h2 class='page-header services'>".$servicesHeading."</h2>";
			echo "</div>";
		}
        
        if (!empty($servicesBlurb)) {
            echo "<div class='col-lg-12'>";
            echo "<p class='text-center'>".$servicesBlurb."</p>";
            echo "</div>";
        }
        ?>
<div class="container">
		<br>
		<h2 align="center">Live Search for Book name</h2>
		<div class="form-group">
			<div class="input-group">
				<span class="input-group-addon">Search</span>
				<input type="text" name="search_text" id="search_text" placeholder="Search by Customer Details" class="form-control" />
			</div>
		</div>
		<br>
		<div id="result"></div>
	</div>

<script type="text/javascript">
	$(document).ready(function(){

		load_data();

		function load_data(query) {
			$.ajax({
				url:"includes/books_inc.php",
				method:"POST",
				data:{query:query},
				success:function(data)
				{
					$('#result').html(data);
				}
			});
		}

		$('#search_text').keyup(function(){
			var search = $(this).val();
			if(search != '')
			{
				load_data(search);
			}
			else
			{
				load_data();
			}
		});
	});

</script>
<?php
	}
	else 
	{
		echo '<div style="height:300px;"> No Book Found in this Category </div>';
	}
?>