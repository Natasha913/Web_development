<?php
	include 'controllers/CustomerController.php';
	$cuss = getAllCustomers();
	
?>
<html>
             <head>
			 <link rel="stylesheet" href="style/login.css">
	        
			 <style>
.red {
  background-color: #4000ff;
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
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
			 </head>
<body>
         <div>
			<h3 class="header">Reviews </h3>
			</div>
			<a  href="dashboard_d.php" class ="red">Back</a>
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th>Name &nbsp &nbsp   </th>
			<th>Number</th>
			<th>Reviews & Ratings</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($cuss as $cu){
					$id = $cu["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$cu["name"]. "</td>" ; 
						echo "<td>".$cu["num"]. "</td>";
						echo '<td><a  href="all_b_r.php" class ="red1">Reviews & Ratings  </a></td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>