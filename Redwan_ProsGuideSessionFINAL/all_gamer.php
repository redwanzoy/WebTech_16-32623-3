<?php
	include 'controllers/GamerController.php';
	$ownerr = getAllGamers();
	
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
</style>
			 </head>
<body>
         <div>
			<h3 class="header">All Gamer Info </h3>
			</div>
			<div>
			<a  href="gamer.php" class ="red2">Back</a>
			</div>
			
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th>Name &nbsp &nbsp   </th>
			<th>Username &nbsp &nbsp </th>
			<th>Password &nbsp &nbsp </th>
			<th>Nid &nbsp &nbsp </th>
			<th>Number</th>
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($ownerr as $o){
					$id = $o["id"];
					echo "<tr>";
						echo "<td>$i</td>";
						echo "<td>".$o["name"]. "</td>" ; 
						echo "<td>".$o["username"]. "</td>";
						echo "<td>".$o["password"]. "</td>";
						echo "<td>".$o["nid"]. "</td>";
						echo "<td>".$o["num"]. "</td>";
						echo '<td><a href="edit_gamer.php?id='.$id.'" class="red"> Edit</a></td>';
						echo '<td><a href="delete_gamer.php?id='.$id.'"  class="red1">Delete</td>';
					echo "</tr>";
					$i++;
				}
				
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>