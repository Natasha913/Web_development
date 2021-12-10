<?php
    
	require_once 'controllers/DeliverymanController.php';
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
		function validate()
		{
			refresh();
			if(get("name").value == ""){
				hasError = true;
				get("err_name").innerHTML = "*Name Req";
			}
			
			if(get("uname").value=="")
			{
				hasError = true;
				get("err_uname").innerHTML = "*Username Req";
			else if(get("uname").value.length <=6)
			 {
				hasError = true;
				get("err_uname").innerHTML = "*Username Must be 6 Characters Long";
			 }
			}
			
			if(get("pass").value=="")
			{
				hasError = true;
				get("err_pass").innerHTML = "*Password Req";
			else if(get("pass").value.length <=8)
			 {
				hasError = true;
				get("err_pass").innerHTML = "*Password must be at least 8 characters";
			 }
			
			}
			
			if(get("nid").value=="")
			{
				hasError = true;
				get("err_nid").innerHTML = "*NID Req";
			else if(get("nid").value.length <10)
			 {
				hasError = true;
				get("err_nid").innerHTML = "*NID must be 10 numarical value";
			 }
			else if(get("nid").value.length >10)
			 {
				hasError = true;
				get("err_nid").innerHTML = "*NID must be 10 numarical value";
			 }
			
			}
			
			if(get("num").value=="")
			{
				hasError = true;
				get("err_num").innerHTML = "*Number Req";
			else if(get("num").value.length <11)
			 {
				hasError = true;
				get("err_num").innerHTML = "*Number must be 11 numarical value";
			 }
			else if(get("num").value.length >11)
			 {
				hasError = true;
				get("err_num").innerHTML = "*Number must be 11 numarical value";
			 }
			
			}
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_name").innerHTML ="";
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
			get("err_nid").innerHTML="";
			get("err_num").innerHTML = "";
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
			<input type="text" id="uname" name="uname" value="<?php echo $uname;?>" >
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
</html>

