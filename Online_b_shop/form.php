<?php require 'vldtn.php';
?>
<html>
	<script>
		var hasError=false;
		function get(id){
			return document.getElementById(id);
		}
		
		
		 
		function validate(){
			refresh();
			if(get("name").value == ""){
				hasError = true;
				get("err_name").innerHTML = "*Name Req";
			}
			else if(get("name").value.length <=2){
				hasError = true;
				get("err_name").innerHTML = "*Name must be > 2 characters";
			}
			if(get("uname").value==""){
				hasError = true;
				get("err_uname").innerHTML = "*Username Req";
			}
			if(get("pass").value == ""){
				hasError = true;
				get("err_pass").innerHTML = "*Password Req";
			}
			else if(get("pass").value.length <=2){
				hasError = true;
				get("err_pass").innerHTML = "*Name must be > 2 characters";
			}
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_name").innerHTML ="";
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
		}
	</script>
	<body>
		<form action="" onsubmit="return validate()" method="post">
			
				<div>
					<h4>Name</h4>
					<input id="name" name="name" value="<?php echo $name;?>" type="text"><br>
					<span id="err_name"><?php echo $err_name;?></span>
				</div>
				<div>
					<h4>Username</h4>
					<input id="uname" name="username" type="text" placeholder="Your name.."><br>
					<span id="err_uname"></span>
				</div>
				<div>
			        <h4 >Password</h4> 
			        <input id = "pass" type="password" name="pass" value="<?php echo $pass;?>">
		           	<span id="err_pass"><?php echo $err_pass;?></span>
	          	</div>
				
			
				<div>
					<input type="submit" value="Register">
				</div>
			
		</form>
	</body>
</html>