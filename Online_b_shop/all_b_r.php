<?php
	include 'controllers/b_rController.php';
	$revi = getAllReviews();
	
?>
<html>
             <head>
			 <link rel="stylesheet" href="style/login.css">
	        
			 <style>
.red {
  background-color:#994d00;
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
  background-color:#cc6600;
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
.red2 {
  background-color:#0080ff;
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
         
           
			<div align = "center">
			<a  href="all_b_r.php" class ="red1">All Reviews</a>
			<a  href="add_b_r.php" class ="red">Add Reviews</a>

			</div> 
<br>
<br>
			
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th>Rate &nbsp </th>
			<th>Reviews &nbsp </th>
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($revi as $r){
					$id = $r["id"];
					echo "<tr>";
						echo "<td><b>$i</b></td>";
                        echo "<td>".$r["rate"]. "</td>";
                        echo "<td>".$r["reviews"]. "</td>";
					   
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


 <a  href="dashboard_c.php" class ="red2">Back</a>
</body>
</html>