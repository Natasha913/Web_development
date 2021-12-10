<?php
	include 'controllers/PaymentController.php';
	$paymen = getAllPayments();
	
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
			<h3 class="header">All Order </h3>
			</div>
			
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th> Name</th>
			
			<th>Address &nbsp &nbsp </th>
			<th>Payment Method &nbsp &nbsp </th>
			<th>Quantity &nbsp &nbsp </th>
			<th>Nid &nbsp &nbsp </th>
			<th>Number</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($paymen as $p){
					$id = $p["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$p["name"]. "</td>";
						echo "<td>".$p["address"]. "</td>";
						echo "<td>".$p["payment"]. "</td>";
						echo "<td>".$p["quantity"]. "</td>";
						echo "<td>".$p["nid"]. "</td>";
						echo "<td>".$p["num"]. "</td>";
					    
						echo '<td><a href="order_cncl.php?id='.$id.'" class="red1">Cancle</td>';
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>