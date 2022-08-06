<html>
      <head>
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
  border-radius: 5px;
}
.red1 {
  background-color: #ff0000;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
.red3 {
  background-color: #ff6666;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}
.blue {
  background-color: #aa9999;
  border: none;
  color: white;
  padding: 7px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 5px;
}

</style>
			
	  </head>
      <body>
	        <div>
			<h1 class="header">ProsGuide Session </h1>
			</div>
			<div align = "right">

			<a  href="complaint.php" class ="red3">Complaints</a> 
			<a  href="all_login.php" class ="red">Login</a>
			<a  href="allsignup.php" class ="red1">Signup</a>
			<br>
			 
			<p align = "center" class="last"><b>Hotline: 01312740417, Mail: admin@ProsGuide.com</b></p>
			</div>
			
			
			
			<div id="demo">
           <button type="button" onclick="loadDoc()" class ="blue" >Want Free Contents? Click Me</button>
           </div>
		   <img width = "1920" height = "1080"  src = "storage/pic/home.gif">
			
			
				
			
			<script>
			//ajax
           function loadDoc() {
           const xhttp = new XMLHttpRequest();
           xhttp.onload = function() {
           document.getElementById("demo").innerHTML =
           this.responseText;
           }
           xhttp.open("GET", "freelink.php");
           xhttp.send();
           }
           </script>
			
	  </body>
</html>