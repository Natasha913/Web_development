<?php
     include 'models/db_config.php';
	 
     $name = ""; 
	 $err_name = ""; 
     $address = ""; 
	 $err_address = ""; 
     $quantity = "";
	 $err_quantity = "";
	 $payment= "";
	 $err_payment = "";
	 $nid="";
	 $err_nid="";
	 $num ="";
	 $err_num ="";
	 
	 
	 $hasError = false;

     $pay = array("Bkash","Nogod","Debit Card","Credit Card"); //prsv


	 if(isset($_POST["paymentt"])){

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		} 
		else 
		{
			$name = $_POST["name"]; //!-- if no er
		}

		


		if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		} 
		else 
		{
			$address = $_POST["address"];
		}


		if (!isset($_POST["payment"])){
			$hasError = true;
			$err_payment="Payment Required";
		}
		else
		{
			$payment = $_POST["payment"];
		}

		
		if(empty($_POST["quantity"])){
			$hasError = true;
			$err_quantity="Quantity Required";
		} 
		else if(!is_numeric($_POST["quantity"]))
		{
			$err_quantity="Numeric value required";
			$hasError = true;
		}
		else
		{
			$quantity = $_POST["quantity"];
		}
        if(empty($_POST["nid"]))
		   {
			 $err_nid="NID Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["nid"]))
		   {
			 $err_nid="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["nid"])<10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["nid"])>10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		   else
		   {
			 $nid=$_POST["nid"];
		   }
		   //num
		    if(empty($_POST["num"]))
		   {
			 $err_num="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["num"]))
		   {
			 $err_num="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["num"])<11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["num"])>11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
			
		   else
		   {
			 $num=$_POST["num"];
		   }


		if(!$hasError){ //otpt 
		
          $rs = insertPayment($name,$address,$payment,$quantity,$nid,$num);
		  if($rs === true){
			header("Location: p_apprv.php");//sob thik hole thn.
		}
		$err_db = $rs; //or err msg
		
	}
	  
		}
		//rent
		if(isset($_POST["rents"])){

		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		} 
		else 
		{
			$name = $_POST["name"]; //!-- if no er
		}

		


		if(empty($_POST["address"])){
			$hasError = true;
			$err_address="Address Required";
		} 
		else 
		{
			$address = $_POST["address"];
		}


		if (!isset($_POST["payment"])){
			$hasError = true;
			$err_payment="Payment Required";
		}
		else
		{
			$payment = $_POST["payment"];
		}

		
		if(empty($_POST["quantity"])){
			$hasError = true;
			$err_quantity="Quantity Required";
		} 
		else if(!is_numeric($_POST["quantity"]))
		{
			$err_quantity="Numeric value required";
			$hasError = true;
		}
		else
		{
			$quantity = $_POST["quantity"];
		}
        if(empty($_POST["nid"]))
		   {
			 $err_nid="NID Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["nid"]))
		   {
			 $err_nid="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["nid"])<10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["nid"])>10)
			{
                $err_nid="NID must be 10 numarical value";
				$hasError=true;
            }
		   else
		   {
			 $nid=$_POST["nid"];
		   }
		   //num
		    if(empty($_POST["num"]))
		   {
			 $err_num="Number Required";
			 $hasError=true;
		   }
		   elseif(!is_numeric($_POST["num"]))
		   {
			 $err_num="Numaric Value required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["num"])<11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
		  
		   elseif(strlen($_POST["num"])>11)
			{
                $err_num="Number must be 11 numarical value";
				$hasError=true;
            }
			
		   else
		   {
			 $num=$_POST["num"];
		   }


		if(!$hasError){ //otpt 
		
          $rs = insertRent($name,$address,$payment,$quantity,$nid,$num);
		  if($rs === true){
			header("Location:p_apprv.php");//sob thik hole thn.
		}
		$err_db = $rs; //or err msg
		
	}
	  
		}
	
		
	
	
	function insertPayment($name,$address,$payment,$quantity,$nid,$num){
		$query="insert into paymentt values (NULL,'$name','$address','$payment','$quantity','$nid','$num')";
		return execute($query);
	}
	
	function getAllPayments(){
		$query = "select * from paymentt order by name asc";
		$rs = get($query);
		return $rs;
	}
	
	function insertRent($name,$address,$payment,$quantity,$nid,$num){
		$query="insert into rentt values (NULL,'$name','$address','$payment','$quantity','$nid','$num')";
		return execute($query);
	}
	
	function getAllRents(){
		$query = "select * from rentt order by name asc";
		$rs = get($query);
		return $rs;
	}
	
?>