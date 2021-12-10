<?php
	include 'controllers/CategoryController.php';
	$categories = getAllCategories();
	
?>
<html>
             <head>
			 <link rel="stylesheet" href="style/login.css">
	        
			 <style>
.red {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
.red1 {
  background-color: #ff0000;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}

</style>
			 </head>
<body>
         <div>
			<h3 class="header">All Category </h3>
			</div>
			
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th> Name</th>
			
			<th></th>
			<th></th>
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($categories as $c){
					$id = $c["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$c["name"]. "</td>";
					    echo '<td><a href="editcategories.php?id='.$id.'" class="red">  Edit</a></td>';
						echo '<td><a class="red1">Delete</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>