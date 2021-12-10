<?php
	include 'controllers/BookOwnerController.php';
	 $key = $_GET["key"];
	 $Books = searchAny($key);
	 if(count ($Books)>0)
	 {
		 foreach ($Books as $k)
		 {
			 echo  "<a href='editowner.php?id=".$k["id"]."'>".$k["name"]."</a><br>";
		 }
	 }
?>