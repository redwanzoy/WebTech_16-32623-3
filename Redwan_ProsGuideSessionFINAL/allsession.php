<?php
	include 'controllers/SessionController.php';
	$sessions = getSessions();
	
?>
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
.red2 {
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
  border-radius: 5px;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.box{
  border: 3px solid black;
  margin: 0;
  width: 100%;
  height: 30px;

}
</style>
			 </head>
<body>
         <div>
			<h3 class="header">All Sessions </h3>
			<a  href="session_cllc.php" class="red2" >Back</a>
			
			</div>
			<div>
			<input type="text" class="box" onkeyup= "searchSession(this)" placeholder ="Search Session">
			</div>
			<div id ="suggesstion"></div>
			<br> 
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th>Session's Name  &nbsp </th>
		  	<th>Price  &nbsp </th>
			<th>Image  &nbsp </th>
			
		</thead>
		<tbody>
			<?php
				$i=1;
				foreach($sessions as $s){
					$id = $s["id"];
					echo "<tr>";
						echo "<td> &nbsp $i</td>";
						echo "<td>".$s["sname"]. "</td>";
						echo "<td>".$s["pri"]. "</td>";
						echo "<td><img width = '80px' height='100px' src= '".$s["image"]."'</td>";
					    echo '<td><a class="red1">Delete</td>';
				    	echo "</tr>";
					$i++;
				}
			?>
			
		</tbody>
	</table>
</div>
<script src ="js/sessions.js"></script>
</body>
</html>