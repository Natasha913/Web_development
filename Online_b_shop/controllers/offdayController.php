<?php
	include 'models/db_config.php';
	$id="";
	$err_id="";
	$name="";
	$err_name="";
	$day="";
	$err_day="";
	$howmany="";
	$err_howmany="";
	$status="";
	$err_status="";
	
	
	
	
	$err_db="";
	
	$hasError=false;
	
	if(isset($_POST["add_off"])){
		
		if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["day"]))
		{
			$hasError  = true;
			$err_day = "Value Required";
		}
		else{
			$day = $_POST["day"];
		}
		
		if(empty($_POST["howmany"]))
		{
			$hasError  = true;
			$err_howmany = "Value Required";
		}
		else{
			$howmany = $_POST["howmany"];
		}
		if(empty($_POST["status"]))
		{
			$hasError  = true;
			$err_status = "value Required";
		}
		else{
			$status = $_POST["status"];
		}
			
			
		if(!$hasError){
			$rs = insertUser($name,$day,$howmany,$status);
			if($rs === true){
				header("Location:off.php");
			}
			$err_db = $rs;
		}
	}
	
	
	
	else if (isset($_POST["edit_off"]))
	{
		if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Name Required";
		}
		else{
			$name = $_POST["name"];
		}
		if(empty($_POST["day"]))
		{
			$hasError  = true;
			$err_day = "Value Required";
		}
		else{
			$day = $_POST["day"];
		}
		
		if(empty($_POST["howmany"]))
		{
			$hasError  = true;
			$err_howmany = "Value Required";
		}
		else{
			$howmany = $_POST["howmany"];
		}
		if(empty($_POST["status"]))
		{
			$hasError  = true;
			$err_status = "value Required";
		}
		else{
			$stutas = $_POST["status"];
		}
			

			
			
		$rs =  updateOwner($_POST["name"],$_POST["day"],$_POST["howmany"],$_POST["status"],$_POST["id"]);
		if($rs === true){
			header("Location: alldayoff.php");
		}
		$err_db = $rs;
	}

	
	
	function insertUser($name,$day,$howmany,$status){
		$query = "insert into off values (NULL,'$name','$day','$howmany','$status')";
		return execute($query);
		
	}
	
	
	function getAllOwners(){
		$query = "select * from off ";
		$rs = get($query);
		return $rs;
	}
	function getOwner($id){
		$query="select * from off where id = $id";
		$rs = get($query);
		return $rs[0];
	}
	function updateOwner($name,$day,$howmany,$status,$id)
	{
		$query="update off set name='$name',day='$day',howmany='$howmany',status='$status' where id= '$id'";
		return execute($query);
		
		
	}
	
	
	
?>