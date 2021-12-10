<?php
	include 'controllers/BookController.php';
	 $key = $_GET["key"];
	 $Books = searchBook($key);
	 if(count ($Books)>0)
	 {
		 foreach ($Books as $k)
		 {
			 echo  "<a href='allbook.php?id=".$k["id"]."'>".$k["name"]."</a><br>";
		 }
	 }
?>