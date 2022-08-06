<?php
require_once 'controllers/editSessionInfo.php';
session_start();
    require_once "db_connect.php";
	$userID = $_GET['id'];
	$query = "SELECT * FROM sessions_info WHERE id='$userID'";
	$userData = get($query);
	$userData = $userData[0];

?>

<html>
	<head></head>
	<body>
	<center><img src="logo2.png" style="height:100px"></center><br>
	    <fieldset align="center">
	    <legend><h1>Session's Information</h1></legend>
		
		
			<form action="" method="post" enctype="multipart/form-data">
			<table align='center'>
			<tr>
			 <td><style="text-align:center;">ID: <?=$userData['id']?></td>
			 
			 </tr>
			<tr>
			<td><b><style="text-align:center;">Session Name: <?=$userData['sname']?></b></td>
			<td><input type="text" name="sname" value = "<?php echo $sname;?>"></td>
			<td><span><?php echo $err_sname;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Coach Name: <?=$userData['cname']?></b></td>
			<td><input type="text" name="cname" value = "<?php echo $cname;?>"></td>
			<td><span><?php echo $err_cname;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Price: <?=$userData['pri']?></b></td>
			<td><input type="text" name="pri" value = "<?php echo $pri;?>"></td>
			<td><span><?php echo $err_pri;?></span></td>
			 </tr>
			 <tr>
			<td><b><style="text-align:center;">Time: <?=$userData['time']?></b></td>
			<td><input type="text" name="time" value = "<?php echo $time;?>"></td>
			<td><span><?php echo $err_time;?></span></td>
			 </tr>
			<td><b><style="text-align:center;">Image: <img width="160px" src="<?=$userData['image']?>"></b></td>
			<td><input type="file" id="file" name="file"></td>
			</tr>
			</table>
				
				
				
			
			
			<center><center><input type="submit" name="updateDetails" value="Update"> &nbsp;</center>
	
		</form >
		</fieldset>	
		</body>
</html>