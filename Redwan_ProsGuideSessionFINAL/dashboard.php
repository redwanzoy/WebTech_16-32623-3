<?php
        session_start();
	    if(!isset($_SESSION["loggeduser"])){
		header("Location:login.php");
	}
?>

<html>
      <head>
	         <link rel="stylesheet" href="styles/login.css">
			 <style>
 .button7 {
  background-color: #ff0066; 
 
  color: white;
 

  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px 5px 5px 5px;
  padding: 8px 8px 8px 8px;
  border-radius: 5px;
  
}
			 </style>
	  </head>
      <body>
	        <div>
			<h1 class="header">Admin <?php echo $_SESSION["loggeduser"];?></h1>
			</div>
			<div align = "center">
			<a  href="admin.php" class ="button button7">Admin</a>
			<a  href="gamer.php" class ="button button0">Gamer</a>
			<a  href="session_cllc.php" class ="button button7">Sessions</a>
			<a  href="allcomplains.php" class ="button button3">Gamer Complaints</a>
			<a  href="index.php" class ="button button6">Back</a>
		    <img width = "1920" height = "1080"  src = "storage/pic/dashboard.gif">
			<p align = "center" class="last"></p>
			
			
		
			
	  </body>
</html>