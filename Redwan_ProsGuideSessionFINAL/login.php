<?php
	include 'controllers/User_aController.php';
?>
<html>
      <head>
	         <link rel="stylesheet" href="styles/mystyle.css">
			 <link rel="stylesheet" href="styles/login.css">
			 <style>
.red {
  background-color: #4CAF50;
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
			
			if(get("uname").value==""){
				
				get("err_uname").innerHTML = "*Username Required";
				get("err_uname").style.color="red";
				hasError = true;
			}
			if(get("pass").value == ""){
				
				get("err_pass").innerHTML = "*Password Required";
				get("err_pass").style.color="red";
				hasError = true;
			}
			else if(get("pass").value.length <=2){
				
				get("err_pass").innerHTML = "*Name must be > 2 characters";
				hasError = true;
			}
			return !hasError;
		}
		function refresh(){
			hasError = false;
			
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
		}
	</script>
	  <body>
 
<div class="center-login">
            <img width = "588" height = "88"  src = "storage/pic/logo2.png">
			<p align = "center" class="last"></p>

	<h1 >Login</h1>
	<h5 ><?php echo $err_db;?></h5>
	<form action="" onsubmit="return validate()" method="post" >
		<div >
			<h4 >Username</h4> 
			<input id ="uname" name="uname" value="<?php echo $uname;?>">
			<span id="err_uname"><?php echo $err_uname;?></span>
		</div>
		
		<div>
			<h4 >Password</h4> 
			<input id = "pass" type="password" name="pass" value="<?php echo $pass;?>">
			<span id="err_pass"><?php echo $err_pass;?></span>
		</div>
		<div >
		<div >
			<br>
			<div align = "center">
		    <input type="submit" name="btn_login" class="red"  value="Login" >
			 <a  href="index.php" class="red1" >Back</a>
		</div>
		
		<div >
			
			<a href="signup.php" >Not registered yet? Sign Up</a>
		</div>
	</form>
</div>
</body>
</html>
