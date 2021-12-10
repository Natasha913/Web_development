<?php
    
	require_once 'controllers/offdayController.php';
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
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action=""  method="post" >
		<div >
			<h4 >Name</h4> 
			<input type="text"  name="name" value="<?php echo $name;?>" >
			<span ><?php echo $err_name;?></span>
			
		</div>
		<div >
			<h4 >Date</h4> 
			<input type="text"  name="day" placeholder ="0000-00-00" value ="<?php echo $day;?>">
			<span ><?php echo $err_day;?></span>
		</div>
		
		<div >
			<h4 >For how many days</h4> 
			<input type="text"  name="howmany" value="<?php echo $howmany;?>"> 
			<span ><?php echo $err_howmany;?></span>
		</div>
		
		<div >
			<h4 >Status</h4> 
			<h5> if you want day off then write "request" <h5>
			<input type="text"  name="status" value="<?php echo $status;?>" >
			<span ><?php echo $err_status;?></span>
			
		</div>
			
		<div align ="center" >
			
			<input type="submit" name="add_off"  class = "red" value="submit" >
			 <a  href="home.php" class="red1" >Back</a>
		</div>
	</form>
</div>
</body>
</html>

