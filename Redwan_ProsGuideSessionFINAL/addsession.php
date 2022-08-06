<?php
	require_once 'controllers/SessionController.php';
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
	
	    <h5 class="text-danger"><?php echo $err_db;?></h5>
	    <form action="" method="post" enctype="multipart/form-data">
			<table align="center">
			     
				 <tr>
					<td><span><b>Session's Name</b>:</span></td>
					<td><input type="text" name="sname" id ="sname" value = "<?php echo $sname;?>"><br>
					<td><span id="err_sname"><font color="red"> <?php echo $err_sname;?> </font></span></td>
				</tr>
				<tr>
					<td><span><b>Coaches's Name</b>:</span></td>
					<td><input type="text" name="cname" id="cname" value = "<?php echo $cname;?>"><br>
					<td><span id="err_cname"><?php echo $err_cname;?></span></td>
				</tr>
				<tr>
					<td><span><b>Price</b>:</span></td>
					<td><input type="number" name="pri" id ="pri" value = "<?php echo $pri;?>"><br>
					<td><span id="err_pri"><?php echo $err_pri;?></span></td>
				</tr>	
				<tr>
					<td><span><b>Time</b>:</span></td>
					<td><input type="text" name="time" id="time" value = "<?php echo $time;?>"><br>
					<td><span id="err_time"><?php echo $err_time;?></span></td>
				</tr>	
				<tr>
				    <td><input type="file" id="file" name="file">   
                 </tr>
			
				
			</table>
			<br>
				
				<center><input type="submit" name="add_session" class="red" value="Add Session" ></center>
			</div>
		</form>
	</div>

   </body>
  </html>
