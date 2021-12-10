<?php
	require_once 'models/db_config.php';
	$err_db="";
	//validation variables
	if(isset($_POST["add_category"])){
		//do validations
		//if no error
		$rs = insertCategory($_POST["name"]);
		if($rs === true){
			header("Location: allcategories.php");//sob thik hole thn.
		}
		$err_db = $rs; //or err msg
		
	}
	else if (isset($_POST["edit_category"])){
		//do validations
		//if no error
		$rs = updateCategory($_POST["name"],$_POST["id"]);
		if($rs === true){
			header("Location: allcategories.php");
		}
		$err_db = $rs;
	}
	
	function insertCategory($name){
		$query="insert into categories values (NULL,'$name')";
		return execute($query);
	}
	
	function getAllCategories(){
		$query = "select * from categories order by name asc";
		$rs = get($query);
		return $rs;
	}
	function getCategory($id){ //id ps hb
		$query = "select * from categories where id = $id"; //qry gnrt hb // nmrc vl $-str lgb na
		$rs = get($query); // gt fnc atlst 1 arr rtrn krb kch na pleo.
		return $rs[0];	//sgl asarr pbe jta nm cz numrc ple abr vngte hb. 
	}
	function updateCategory($name,$id)
	{
		$query = "update categories set name='$name' where id = $id"; 
		return execute($query);
	}

?>