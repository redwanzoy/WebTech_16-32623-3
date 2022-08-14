<html>
    <head>
	</head>
    <body>
        <button onclick="turnOn()">CSGO </button>
        <img id="bulb" src="valorant.gif">
        <button onclick="turnOff()">Valorant</button>
        <script src="myjs.js"></script>
		
		<br>
		<br>
		
		
		
			<div id="demo">
           <button type="button" onclick="loadDoc()" class ="blue" >Want Free Contents? Click Me</button>
           </div>
			
					
			
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
		   
		   <br>
		   <br>
		
		
		
		
		
		
</body>
</html>