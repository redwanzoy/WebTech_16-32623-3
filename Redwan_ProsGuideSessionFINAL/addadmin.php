<?php
  
	include 'controllers/User_aController.php';
?>
<html>
   
  <head>
	         <link rel="stylesheet" href="styles/mystyle.css">
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
<body>
<div class="center-login">
	<h1 >Add Admin</h1>
	<h5 ><?php echo $err_db;?></h5>
	<form action="" method="post" >
		<div >
			<h4 >Name</h4> 
			<input type="text" name="name" value="<?php echo $name;?>" >
			<span ><?php echo $err_name;?></span>
		</div>
		<div >
			<h4 >Username</h4> 
			<input type="text" name="uname" value="<?php echo $uname;?>" >
			<span ><?php echo $err_uname;?></span>
		</div>
		<div >
			<h4 >NID</h4> 
			<input type="text" name="nid" value ="<?php echo $nid;?>">
			<span><?php echo $err_nid;?></span>
		</div>
		
		<div >
			<h4 >Password</h4> 
			<input type="password" name="pass" value="<?php echo $pass;?>"> 
			<span ><?php echo $err_pass;?></span>
		</div>
		
		<div >
			<h4 >Phone Number</h4> 
			<input type="text" name="num" value="<?php echo $num;?>">
			<span ><?php echo $err_num;?></span>
		</div>
			
		<div align ="center" >
			
			<input type="submit" name="add_admin"  class = "red" value="Submit" >
			 <a  href="admin.php" class="red1" >Back</a>
		</div>
	</form>
</div>
</body>
</html>

