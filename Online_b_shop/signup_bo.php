<?php
    
	require_once 'controllers/BookOwnerController.php';
?>
<html>
   
  <head>
	         <link rel="stylesheet" href="style/mystyle.css">
			 <style>
			 .red {
  background-color: #ff3300;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.red1 {
  background-color: #0080ff;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
          </style>
			 </head>
        <script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		
		 
		function validate(){
			refresh();
			if(get("name").value==""){
				
				get("err_name").innerHTML = "*Name Req";
				get("err_name").style.color="red";
				hasError = true;
			}
			
			if(get("uname").value==""){
				
				get("err_uname").innerHTML = "*Username Req";
				get("err_uname").style.color="red";
				hasError = true;
			}
			if(get("nid").value==""){
				
				get("err_nid").innerHTML = "*NID Req";
				get("err_nid").style.color="red";
				hasError = true;
			}
			if(get("pass").value == ""){
				
				get("err_pass").innerHTML = "*Password Req";
				get("err_pass").style.color="red";
				hasError = true;
			}
			else if(get("pass").value.length <=2){
				
				get("err_pass").innerHTML = "*Name must be > 2 characters";
				hasError = true;
			}
			if(get("num").value==""){
				
				get("err_num").innerHTML = "*Number Req";
				get("err_num").style.color="red";
				hasError = true;
			}
			return !hasError;
		}
		function refresh(){
			hasError = false;
			
			get("err_name").innerHTML ="";
			get("err_uname").innerHTML ="";
			get("err_nid").innerHTML ="";
			get("err_pass").innerHTML ="";
			get("err_num").innerHTML ="";
			
		}
	</script>
<body>
<div class="center-login">
	<h1 >Sign Up</h1>
	<h5 class="text-danger"><?php echo $err_db;?></h5>
	<form action="" onsubmit="return validate()" method="post" >
		<div >
			<h4 >Name</h4> 
			<input type="text" id="name" name="name" value="<?php echo $name;?>" >
			<span id="err_name"><?php echo $err_name;?></span>
			
		</div>
		<div >
			<h4 >Username</h4> 
			<input type="text" id="uname" name="uname" onfocusout ="checkUsername(this)" value="<?php echo $uname;?>" >
			<span id="err_uname"><?php echo $err_uname;?></span>
		</div>
		<div >
			<h4 >NID</h4> 
			<input type="text" id="nid" name="nid" value ="<?php echo $nid;?>">
			<span id="err_nid"><?php echo $err_nid;?></span>
		</div>
		
		<div >
			<h4 >Password</h4> 
			<input type="password" id="pass" name="pass" value="<?php echo $pass;?>"> 
			<span id="err_pass"><?php echo $err_pass;?></span>
		</div>
		
		<div >
			<h4 >Phone Number</h4> 
			<input type="text" id="num" name="num" value="<?php echo $num;?>">
			<span id="err_num"><?php echo $err_num;?></span>
		</div>
			
		<div align ="center" >
			
			<input type="submit" name="sign_up"  class = "red" value="SignUp" >
			 <a  href="home.php" class="red1" >Back</a>
		</div>
	</form>
</div>
</body>
<script src="js/signup.js"></script>
</html>

