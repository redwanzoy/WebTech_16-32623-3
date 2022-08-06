<?php include 'header.php';
	include 'controllers/GamerController.php';
?>
<html>

      <head>
	         <link rel="stylesheet" href="styles/mystyle.css">
			 <link rel="stylesheet" href="style/login.css">
<style>

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
	
	<h5 ><?php echo $err_db;?></h5>
	<form action=""  method="post" >
		<div >
			<h4 >Complaint Box</h4> 
			<input  name="com" value="<?php echo $com;?>">
			<span id="err_com"><?php echo $err_com;?></span>
		</div>
			<div align = "center">
		    <input type="submit" name="ok" class="red1"  value="Done" >
			 <a  href="index.php" class="red1" >Back</a>
		</div>
		
	</form>
</div>
</body>
</html>
