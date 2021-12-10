<?php
	include 'controllers/offdayController.php';
	$ownerr = getAllOwners();
	
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
.red2 {
  background-color: #0080ff;
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
			<h3 class="header">deliveryman’s day-off Informations </h3>
			</div>
			<div>
			<a  href="dashboard.php" class ="red2">Back</a>
			</div>
			
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th>Name &nbsp &nbsp   </th>
			<th>Date &nbsp &nbsp </th>
			<th>Fow How Many Days &nbsp &nbsp </th>
			<th>Status  </th>
			
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($ownerr as $o){
					$id = $o["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$o["name"]. "</td>" ; 
						echo "<td>".$o["day"]. "</td>";
						echo "<td>".$o["howmany"]. "</td>";
						echo "<td>".$o["status"]. "</td>";
						
						echo '<td><a href="editdayoff.php?id='.$id.'" class="red"> Edit</a></td>';
					
					echo "</tr>";
					$i++;
				}
				
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>