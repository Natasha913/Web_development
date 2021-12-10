<?php
	require_once 'controllers/BookController.php';
	$id = $_GET["id"]; // vl pbo
	$c = getBook($id);
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
	
	    <h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" method="post" enctype="multipart/form-data" class="form-horizontal form-material">
	    <div align="center" >
			<div >
				<h4 >Book Name:</h4> 
			<input type="hidden" name="id" value="<?php echo $c["id"];?>">
				<input type="text" name="name" value ="<?php echo $c["name"];?>">
				<span><?php echo $err_name;?></span>
			</div>
			
		
			
			
			
			<div >
				<h4 >Quantity:</h4> 
				<input type="text" name="quantity" value="<?php echo $c["quantity"];?>" >
				<span><?php echo $err_quantity;?></span>
			</div>
			
		    <div >
			<h4 class="text">Category:</h4> 
			<select name="categories" >
				 <option  selected disabled >--Choose One--</option>

									     <?php 
										 foreach($cat as $c){ //dynmc 
											 if($c ==  $categories)
											 echo"<option selected>$c</option>";
											 else 
											 echo"<option >$c</option>"; //shw slct
										    }
											?>
							             </select>
			</select>
			<span><?php echo $err_categories;?></span>
		</div>
			 
			
			<div >
		
				<h4 >price:</h4> 
				<input type="text" name="price" value="<?php echo $c["price"];?>">
				<span><?php echo $err_price;?></span>
			</div>
			
			<div >
				<h4 >Description:</h4> 
				<textarea type="text" name="des" value="<?php echo $c["des"];?>"></textarea>
				<span><?php echo $err_des;?></span>
			</div>
			<br>
			<div >
				<h4 >Image:</h4> 
				<input type="file" name="pimage" value="<?php echo $c["pimage"];?>">
				<span><?php echo $err_pimage;?></span>
			</div>
			<br>
			<div >
				
				
				<input type="submit" name="edit_book" class="red" value="Edit Book" >
			</div>
		</form>
	</div>

   </body>
  </html>
