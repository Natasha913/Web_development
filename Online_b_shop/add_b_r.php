<?php
	include 'controllers/b_rController.php';
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
			<h1 class="header">Add Reviews </h1>
			</div>
	
	<div align="center" >
		<h5 ><?php echo $err_db;?></h5> 
		<form action=""  method="post" >
			
             <div >
				<h4 class="text">Rate:</h4> 
               
				<select name="rate">
							           <option  selected disabled >--Choose One--</option>
									    <option  >*</option>
										 <option >**</option>
										  <option  >***</option>
										   <option >****</option>
										    <option >*****</option>

									  
							             </select>
							           
			</div>
			
			

			<br>


             <div >
				<h4 class="text">Reviews:</h4> 
				<input type="text" name="reviews" >
			</div>

			<br>
			<div >
				
				<input type="submit" name="add_reviews" class="red" value="Add Reviews" >
			</div>
		</form>
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


 <a  href="all_b_r.php" class ="red1">Back</a>
   </body>
  </html>
