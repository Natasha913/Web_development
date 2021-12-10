<?php

     require_once '../Online_b_shop/models/db_config.php';
	 header("Location: all_cus.php");
     $id = $_GET['id'];
	 $query = "DELETE FROM cus WHERE id = '$id'";
     get($query);
	  
?>