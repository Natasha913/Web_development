<?php
	include 'controllers/offdayController.php';
	$ownerr = getAllOwners();
	
?>

<html>
      <head>
	         <link rel="stylesheet" href="style/login.css">
			 <style>
 .button7 {
  background-color: #ff0066; 
 
  color: white;
 

  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px 5px 5px 5px;
  padding: 8px 8px 8px 8px;
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
			<h1 class="header"></h1>
			</div>
			<div align = "center">
			<a  href="dayoff.php" class ="button button7">Day off request</a>
			
			<a  href="home.php" class ="button button6">Back</a>
		  
			 <div>
			<h1 class="header"></h1>
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
						
						
					
					echo "</tr>";
					$i++;
				}
				
			?>
			
		</tbody>
	</table>
</div>
		
			
	  </body>
</html>