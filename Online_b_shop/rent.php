<!-- tk 1 vrbl fr empty str and fr 1 err cntrl -->
<?php
   require_once 'controllers/PaymentController.php';
?>
<html>
      <head>
	  <title>Rent</title>
	  <link rel="stylesheet" href="style/mystyle.css">
	  <link rel="stylesheet" href="style/login.css">
			 <style>
 .red3 {
  background-color: #ff6666;
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
  background-color: #00b300;
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

			 </style>
	    
	  </head>
	  
	     <body>
		 <span><h1 class="header">Rent</h1></span>
		  
		    <form action="" method="post"> <!-- act for which page rcd and wch mthd fr rst--> 
			
			   <div class="center-login"   >
			           <div>
					   <br>
					        <span><b>Name:</b></span>
							<input type="text" name="name" value = "<?php echo $name;?>"placeholder="Enter your name">
							<!-- name = "..." indx idntfr -->
							<span><?php echo $err_name;?></span>
					    </div>
						<br>
						<div>
					        <span><b>Address:</b></span>
							<input type="text" name="address" value = "<?php echo $address;?>"  placeholder="Enter address">
							
							<span><?php echo $err_address;?></span>
					    </div>
					   <br>
					   <div>
					       <span><b>Payment Method:</b></span>
						   
						 <select name="payment">
							           <option  selected disabled >--Choose One--</option>

									     <?php 
										 foreach($pay as $p){ //dynmc 
											 if($p ==  $payment)
											 echo"<option selected>$p</option>";
											 else 
											 echo"<option>$p</option>"; //shw slct
										    }
											?>
							             </select>
						
						<span><?php echo $err_payment;?></span>
						      
						</div>
				<br>
				
				     <div>
					           <span><b>Quantity:<b></span>
							   <input type="text" name="quantity" value = "<?php echo $quantity;?>"  placeholder="Add Quantity">
							   <span><?php echo $err_quantity;?></span>
							   
					</div>	
					<br>
					<div>
					           <span><b>NID:</b></span>
							   <input type="text" name="nid" value = "<?php echo $nid;?>" placeholder="Add nid">
							   <span><?php echo $err_nid;?></span>  
					</div>	
					   <br>
					<div>
					           <span><b>Number:</b></span>
							   <input type="text" name="num" value = "<?php echo $num;?>" placeholder="Add number">
							   <span><?php echo $err_num;?></span>  
					</div>	
					   <br>
				        
					    <div align = "middle">
				         
						   <input type="submit" name="rents" class="red1"  value="Rent request"   >
				        </div>  
						<tr align = "middle">
                       <!-- <td  colspan = "2" ><span><a   href="book_collection.php">Back</a> </span></td> -->
                        </tr>  
							
					       
				</div>
				
            </form>
		 
			 
		 
		 </body>
		 
</html>