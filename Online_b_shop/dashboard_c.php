<?php
  /*  session_start();
	if(!isset($_SESSION["loggeduser"])){
		header("Location:login_c.php");
	}*/
	
	if(!isset($_COOKIE["loggeduser"])){
		header("Location:login_c.php");
	}
	include 'controllers/BookController.php';
	$books = getBooks();
	
?>
<html>
      <head>
	         <link rel="stylesheet" href="style/login.css">
			 <style>
 .red3 {
  background-color: #5900b3;
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
  background-color: #8600b3;
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
  background-color: #b300b3;
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
.red4 {
  background-color: #0086b3;
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
 .red5 {
  background-color:#ff0000;
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
			<h1 class="header"> Welcome <?php echo $_COOKIE["loggeduser"];?></h1>
			</div>
			<div align = "center">
			
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <a  href="home.php" class ="red5">Logout</a>
		  
			</div>
			
			<br> 
			
	  <div align = "center">
	
	<table class="">
		<thead>
		
			<th>Sl# &nbsp </th>
			<th>image</th>
			<th> Name  &nbsp </th>
			<th>price  &nbsp </th>
			<th>Description  &nbsp </th>
			<th>Ratings & Reviews  &nbsp </th>
			<th>Buy  &nbsp </th>
			<th>rent  &nbsp </th>
			
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($books as $b){
					$id = $b["id"];
					echo "<tr>";
						echo "<td> &nbsp $i</td>";
						echo "<td><img width = '80px' height='100px' src= '".$b["pimage"]."'</td>";
						echo "<td>".$b["name"]. "</td>";
						echo "<td>".$b["price"]. "</td>";
						echo "<td>".$b["description"]. "</td>";
						echo '<td><a  href="all_b_r.php" class ="red3">Ratings & Reviews</a></td>';
						echo '<td><a  target =_blank href="payment.php" class ="red1" >Buy Now </a></td>';
						echo '<td><a  target =_blank href="rent.php" class ="red2" >For rent </a></td>';
						      
					
					echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
			
		<div align ="center">	
		<a  href="r_r_deli.php" class ="red4">Reviews & Ratings for Deliveryman </a>
		</div>
		
	  </body>
</html>