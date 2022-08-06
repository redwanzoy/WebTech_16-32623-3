<?php
	include 'controllers/GamerController.php';
	$ownerr = getAllCom();
	
?>
<html>
           <head>
			 <link rel="stylesheet" href="styles/login.css">
			  <style>

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

</style>
	        </head>  
<body>
         <div>
			<h3 class="header">All Complaints</h3>
			</div>
			<div>
			<a  href="dashboard.php" class ="red2">Back</a>
			</div>
			
<div align = "center">
	
	<table class="">
		<thead>
			<th>Sl# &nbsp </th>
			<th>Complaints &nbsp &nbsp   </th>
			
		</thead>
		<tbody>
			<?php
				$i=1;//dyn
				foreach($ownerr as $o){
					$id = $o["id"];
					echo "<tr>";
						echo "<td><b>$i</b></td>";
						echo "<td>".$o["com"]. "</td>" ; 
						
					echo "</tr>";
					$i++;
				}
				
			?>
			
		</tbody>
	</table>
</div>
</body>
</html>