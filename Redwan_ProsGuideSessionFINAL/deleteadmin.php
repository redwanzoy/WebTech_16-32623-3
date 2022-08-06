<?php
     require_once 'db_connect.php';
     $id = $_GET['id'];
	 $query = "DELETE FROM admin WHERE id = '$id'";
     get($query);
	 header("Location: alladmin.php");
?>