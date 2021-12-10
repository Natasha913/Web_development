<?php
  include 'controllers/BookOwnerController.php';
  $uname = $_GET["uname"];
  $user = checkUsername($uname);
  if ($user){
	  echo "invalid";
    }
       echo "valid";
<?