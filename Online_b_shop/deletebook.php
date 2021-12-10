<?php

     require_once '../Online_b_shop/models/db_config.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM newbook WHERE id = '$id'";
     get($query);
	  header("Location: allbook.php");
?>