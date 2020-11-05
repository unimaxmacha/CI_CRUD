<!-- Service Panels -->


<?php //include "ajaxSearchBookCat.php"; ?>

<!--
<div class="container">
	<div class="row center">
        <div class="col-md-8 center">
    		<h2>Custom search Books</h2>
            <div id="custom-search-input">
                <div class="input-group col-md-12">
                    <input type="text" class="form-control input-lg" placeholder="Book Name" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
	</div>
</div>
-->


<?php
        
		echo '<div class="col-md-3" ><ul>';
		//while ($rowbooks = mysqli_fetch_array($bookcategory)){



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
            while ($row = mysqli_fetch_array($result)) 
            {
                $output .= '
                    <li><a href="select_category.php?cat='.$row['id'].'">'.$row['name'].'<a></li>
                ';
                if($row['id']%50==0)
                {
                    $output .= '
                        </ul></div><div class="col-md-3"><ul>
                    ';
                }
            }
            echo $output;
        }


			
		//echo '<li><a href="select_category.php?cat='.$rowbooks['id'].'">'.$rowbooks['name'].'<a></li>';
		//if($rowbooks['id']%50==0) { echo '</ul></div><div class="col-md-3"><ul>' ;  }
		
		//}
		echo '</ul></div>';

        
        echo "</div>";
    
?>