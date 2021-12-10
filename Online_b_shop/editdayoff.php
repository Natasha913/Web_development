<?php
    require_once 'controllers/offdayController.php';
	$id = $_GET["id"]; // vl pbo
	$d = getOwner($id);
?>
<html>
   
  <head>
	         <link rel="stylesheet" href="style/mystyle.css">
			 <style>
			 .red {
  background-color: #ff3300;
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
<div class="center-login">
	<h1 >deliveryman’s day-off </h1>
	<h5 ><?php echo $err_db;?></h5>
	<form action=""  method="post" >
		<div class="form-group">
				<h4 class="text">Name:</h4> 
				<input type="hidden" name="id" value="<?php echo $d["id"];?>">
				<input type="text" name="name" value ="<?php echo $d["name"];?>">
			</div>
		    <div class="form-group">
				<h4 class="text">Date:</h4>
              			
				<input type="text" name = "day" value ="<?php echo $d["day"];?>">
			</div>
			<div class="form-group">
				<h4 class="text">For How Many Days:</h4> 
			
				<input type="text" name ="howmany" value ="<?php echo $d["howmany"];?>">
			</div>
			<div class="form-group">
				<h4 class="text">Status:</h4> 
				
				<input type="text" name ="status" value ="<?php echo $d["status"];?>">
			</div>
			
			<br>
		
		<div >
			
			<input type="submit" name="edit_off" class="red" value="Edit" >
		</div>
	</form>
</div>
</body>
</html>

