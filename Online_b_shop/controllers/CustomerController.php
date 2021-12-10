<?php
    //session_start();
	include 'models/db_config.php';
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$uname="";
	$err_uname="";
	$pass="";
	$err_pass="";
	$nid="";
	$err_nid="";
	$num="";
	$err_num="";
	$com="";
	$err_com="";
	
	
	$err_db="";
	
	$hasError=false;
	
	$user = array ("Adrita Das"=>"Adri123#","monisha12"=>"Monisha123","mohona12"=>"Mohona123#","rahimali"=>"Rahim123#","Shimu Akter"=>"Shimu123#"); 
	
	//pass
	function validPass($password)
	 {
		 $hasUpper=false;
		 $hasLower=false;
		 $hasNum=false;
		 $hasQM=false;
		 $hasHash=false;
		
		for($i=0; $i<strlen($password);$i++)
	     {
			 if(ctype_upper($password[$i]))
			 {
				 $hasUpper=true;
			 }
			 
			 if(ctype_lower($password[$i]))
			 {
				 $hasLower=true;
			 }
			 if($password[$i] >='0' && $password[$i]<='9')
			 {
                 $hasNum=true;
                
             }
			 
		     if($password[$i]=='#')
			 {
                 $hasHash=true;
                
             }
              if($password[$i]=='?')
			  {
                  $hasQM=true;
                
                }
                
                if($hasUpper && $hasLower && $hasHash || $hasQM && $hasNum)
				{
                    return true;
                }
            
            }
            return false;
            
            
            
        }
	
		
	if(isset($_POST["sign_up"])){
		
		if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		
		
		if(strlen($_POST["uname"])<6)
		{
			$err_uname="Username Must be 6 Characters Long";
			$hasError=true;
		}
		else
		{
			$uname=$_POST["uname"];
		}
		
		if(empty($_POST["pass"]))
		    {
			 $err_pass="Password Required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			  $pass=$_POST["pass"];
		     }
			 //
			 
		   //nid
		   
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
			
			
		if(!$hasError){
			$rs = insertUser($name,$uname,$pass,$nid,$num);
			if($rs === true){
				header("Location: login_c.php");
			}
			$err_db = $rs;
		}
	}
	
	elseif(isset($_POST["btn_login"])){
		
		if(empty($_POST["uname"])){
			$hasError  = true;
			$err_uname = "Username Required";
		}
		else{
			$uname = $_POST["uname"];
		}
		if(empty($_POST["pass"])){
			$hasError  = true;
			$err_pass = "Password Required";
		}
		else{
			$pass = $_POST["pass"];
		}
		
		if(!$hasError)
		{
			//if(authenticateUser($uname,$pass)){
				foreach ($user as $u=>$p){
					if($uname == $u && $pass == $p){
						//$_SESSION["loggeduser"] = $uname;
						setcookie("loggeduser",$uname,time()+150);
				header("Location: dashboard_c.php");
					}
				}
			 
			
			$err_db  = "Username and password invalid";
		}
		 
	}
	//add cus
	if(isset($_POST["add_customer"]))
	{
		
		if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		
		
		if(strlen($_POST["uname"])<6)
		{
			$err_uname="Username Must be 6 Characters Long";
			$hasError=true;
		}
		else
		{
			$uname=$_POST["uname"];
		}
		
		if(empty($_POST["pass"]))
		    {
			 $err_pass="Password Required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			  $pass=$_POST["pass"];
		     }
			 //
			 
		   //nid
		   
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
			
			
	
			$rs = insertUser($name,$uname,$pass,$nid,$num);
			if($rs === true){
				header("Location:all_cus.php");
			}
			$err_db = $rs;
		
	}
	
	else if (isset($_POST["edit_cus"]))
	{
		if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		
		
		if(strlen($_POST["uname"])<6)
		{
			$err_uname="Username Must be 6 Characters Long";
			$hasError=true;
		}
		else
		{
			$uname=$_POST["uname"];
		}
		
		if(empty($_POST["pass"]))
		    {
			 $err_pass="Password Required";
			 $hasError=true;
		    }
			elseif(strlen($_POST["pass"])<8)
			{
                $err_pass="Password must be at least 8 characters";
				$hasError=true;
            }
			
		    elseif(!validPass($_POST["pass"]))
		   {

			$err_pass="Password Must Contain 1 Uppercase,1 Lowercase, 1 Number & (# or ?)";
			$hasError=true;
		    }
		     else
		     {
			  $pass=$_POST["pass"];
		     }
			 
			 
		   //nid
		   
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
			

			
			
		$rs =  updateCustomer($_POST["name"],$_POST["uname"],$_POST["pass"],$_POST["nid"],$_POST["num"],$_POST["id"]);
		if($rs === true){
			header("Location: all_cus.php");
		}
		$err_db = $rs;
	}
	//comp
	else if (isset($_POST["ok"]))
	{
		if(empty($_POST["com"]))
		{
			$hasError  = true;
			$err_com = "Write your complaints";
		}
		
			
		$rs =  insertCom($_POST["com"],$_POST["id"]);
		if($rs === true){
			header("Location:complaint.php");
		}
		$err_db = $rs;
	}
	function insertCom($com){
		$query = "insert into complaint values (NULL,'$com')";
		return execute($query);
		
	}
	function getAllCom(){
		$query = "select * from complaint ";
		$rs = get($query);
		return $rs;
	}
	
	
	function insertUser($name,$uname,$pass,$nid,$num){
		$query = "insert into cus values (NULL,'$name','$uname','$pass','$nid','$num')";
		return execute($query);
		
	}
	function authenticateUser($uname,$pass){
		$query = "select * from cus where username='$uname' and password='$pass'";
		$rs = get($query);
		if(count($rs) > 0){
			return true;
		}
		return false;
		
	}
	function getAllCustomers(){
		$query = "select * from cus order by name asc";
		$rs = get($query);
		return $rs;
	}
	function getCustomer($id){
		$query="select * from cus where id = $id";
		$rs = get($query);
		return $rs[0];
	}
	function updateCustomer($name,$uname,$pass,$nid,$num,$id)
	{
		$query="update cus set name='$name',username='$uname',password='$pass',nid='$nid',num='$num' where id= '$id'";
		return execute($query);
		
		
	}
	
	
?>