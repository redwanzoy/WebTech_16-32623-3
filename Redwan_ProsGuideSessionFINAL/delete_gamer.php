<?php

     require_once 'db_connect.php';
     header("Location: all_gamer.php");
     $id = $_GET['id'];
	 $query = "DELETE FROM cus WHERE id = '$id'";
     get($query);
	  header("Location: all_gamer.php");
?>