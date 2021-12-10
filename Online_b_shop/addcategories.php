<?php
	include 'controllers/CategoryController.php';
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
}
.red1 {
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
}

</style>
	  </head>
	   <body>
	     <div>
			<h1 class="header">Add Category </h1>
			</div>
	
	<div align="center" >
		<h5 ><?php echo $err_db;?></h5> 
		<form action=""  method="post" >
			<div >
				<h4 class="text">Name:</h4> 
				<input type="text" name="name" >
			</div>

			<br>
			<div >
				
				<input type="submit" name="add_category" class="red" value="Add Category" >
			</div>
		</form>
	</div>

   </body>
  </html>
