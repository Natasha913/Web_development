<?php

     require_once '../Online_b_shop/models/db_config.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM deliv WHERE id = '$id'";
     get($query);
	  header("Location: alldeliv.php");
?>