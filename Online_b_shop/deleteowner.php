<?php

     require_once '../Online_b_shop/models/db_config.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM owner WHERE id = '$id'";
     get($query);
	 header("Location: allowner.php");
?>