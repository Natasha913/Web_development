<?php
	include 'models/db_config.php';
	$name="";
	$err_name="";
	$price="";
	$err_price="";
	$quantity ="";
	$err_quantity ="";
	$categories="";
	$err_categories="";
	$des="";
	$err_des="";
	$pimage="";
	$err_pimage="";
	
	$err_db="";
	
	$hasError = false;  
		 
     $cat= array("Horror","Novel","Action and Adventure","Classics","Comic Book",
	"Detective","Fantacy","Romance","Science Fiction","Short Stories","Suspense");
	if(isset($_POST["add_book"])) //prmt a 1 vrbl rkhe chck kre st hyche kna 
	{
			if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Book Name Required";
		}
		else{
			$name = $_POST["name"];
		} 
		
		
		if(empty($_POST["quantity"])){
			$hasError = true;
			$err_quantity="Quantity required";
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
		if(empty($_POST["categories"])){
			$hasError = true;
			$err_categories="Category required";
		} 
	
		else
		{
			$categories = $_POST["categories"];
		}
		if(empty($_POST["price"])){
			$hasError = true;
			$err_price="Price required";
		} 
		else if(!is_numeric($_POST["price"]))
		{
			$err_price="Price required";
			$hasError = true;
		}
		else 
		{
			$price = $_POST["price"];
		}
		if(empty($_POST["des"])){
			$hasError = true;
			$err_des="Description Required";
		} 
		else 
		{
			$des = $_POST["des"];
		}
		
	
		
		$fileType = strtolower(pathinfo(basename($_FILES["pimage"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/book_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["pimage"]["tmp_name"],$target);
		
		$rs = insertBook($name,$quantity,$categories,$price,$des,$target);
		if($rs === true){
			header("Location:allbook.php");
		}
		$err_db = $rs;
	
	}
	//edt
	if(isset($_POST["edit_book"]))
	{
					if(empty($_POST["name"]))
		{
			$hasError  = true;
			$err_name = "Book Name Required";
		}
		else{
			$name = $_POST["name"];
		} 
		
		
		if(empty($_POST["quantity"])){
			$hasError = true;
			$err_quantity="Quantity required";
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
		if(empty($_POST["categories"])){
			$hasError = true;
			$err_categories="Category required";
		} 
	
		else
		{
			$categories = $_POST["categories"];
		}
		if(empty($_POST["price"])){
			$hasError = true;
			$err_price="Price required";
		} 
		else if(!is_numeric($_POST["price"]))
		{
			$err_price="Price required";
			$hasError = true;
		}
		else 
		{
			$price = $_POST["price"];
		}
		if(empty($_POST["des"])){
			$hasError = true;
			$err_des="Description Required";
		} 
		else 
		{
			$des = $_POST["des"];
		}
		
	
		
		$fileType = strtolower(pathinfo(basename($_FILES["pimage"]["name"]),PATHINFO_EXTENSION));
		$target = "storage/book_images/".uniqid().".$fileType";
		move_uploaded_file($_FILES["pimage"]["tmp_name"],$target);
		
			
		$rs =  updateBook($_POST["name"],$_POST["quantity"],$_POST["categories"],$_POST["price"],$_POST["des"],$_POST["pimage"],$_POST["id"]);
		if($rs === true){
			header("Location: allbook.php");
		}
		$err_db = $rs;
	
	}
	
	
	function insertBook($name,$quantity,$categories,$price,$des,$pimage){
		$query="insert into newbook values (NULL,'$name','$quantity','$categories','$price','$des','$pimage')";
		return execute($query);
	}
	function getBooks(){
		//$query= "select b.*,c.name as 'c_name' from newbook b left join categories c on b.cid = c.id";
		$query="select * from newbook";
		$rs = get($query);
		return $rs;
	}
	
	function getBook($id){
		$query="select * from newbook where id=$id";
		$rs = get($query);
		return $rs[0];
	}
	function updateBook($name,$quantity,$categories,$price,$des,$pimage,$id){
		$query="update newbook set name='$name',quantity='$quantity',categories='$categories',price='$price',des='$des',pimage='$pimage' where id='$id'";
		return execute($query);
		
	}
		
		
	function searchBook($key){
		$query = "select * from newbook where name like '%$key%'";
		$rs = get ($query);
		return $rs;
	}
?>