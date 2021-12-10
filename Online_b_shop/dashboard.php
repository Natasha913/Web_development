<?php
        session_start();
	    if(!isset($_SESSION["loggeduser"])){
		header("Location:login.php");
	}
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

			 </style>
	  </head>
      <body>
	        <div>
			<h1 class="header">Admin <?php echo $_SESSION["loggeduser"];?></h1>
			</div>
			<br>
			
			<div id ="suggesstion"></div>
			<div align = "center">
			<a  href="admin.php" class ="button button7">All Admin</a>
			<a  href="bookowner.php" class ="button button3">Book Owner</a>
			<a  href="customer.php" class ="button button0">Customer</a>
			<a  href="deliveryman.php" class ="button button4">Deliveryman</a>
			<a  href="alldayoff.php" class ="button button3">Deliveryman day's off</a>
			<a  href="book_cllc.php" class ="button button7">All Books</a>
			<a  href="order.php" class ="button button4">Orders</a>
			<a  href="r_ordr.php" class ="button button0">Rents</a>
			<a  href="allcomplains.php" class ="button button3"> Complaints</a>
			<a  href="home.php" class ="button button6">Back</a>
		  
			
			
		
			
	  </body>
</html>