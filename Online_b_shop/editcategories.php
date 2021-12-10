<?php 
	include 'controllers/CategoryController.php';
	$id = $_GET["id"]; // vl pbo
	$c = getCategory($id);
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


</style>
	  </head>
	   <body>
	   <div>
			<h3 class="header">Edit Category </h3>
			</div>
<!--edit category starts -->
<div align="center">
	<h5 ><?php echo $err_db;?></h5>
	<form action="" method="post" >
		<div class="form-group">
			<h4 class="text">Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
			<input type="text" name="name" value="<?php echo $c["name"];?>" class="form-control">
		</div>
		
		<div >
			
			<input type="submit" name="edit_category" class="red" value="Edit Category" >
		</div>
	</form>
</div>

</body>
</html>