<?php
	require_once 'models/db_config.php';
	$err_db="";
	
	if(isset($_POST["add_reviews"])){
		
		//if no error
		$rs = insertReview($_POST["rate"],$_POST["reviews"]);
		if($rs === true){
			header("Location: all_b_r.php");//sob thik hole thn.
		}
		$err_db = $rs; //or err msg
		
	}
	
	
	function insertReview($rate,$reviews){
		$query="insert into reviews values (NULL,'$rate','$reviews')";
		return execute($query);
	}
	
	function getAllReviews(){
		$query = "select * from reviews ";
		$rs = get($query);
		return $rs;
	}
	function getReview($id){ //id ps hb
		$query = "select * from reviews where id = $id"; //qry gnrt hb // nmrc vl $-str lgb na
		$rs = get($query); // gt fnc atlst 1 arr rtrn krb kch na pleo.
		return $rs[0];	//sgl asarr pbe jta nm cz numrc ple abr vngte hb. 
	}
	

?>