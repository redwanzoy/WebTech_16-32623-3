<?php
	include 'controllers/SessionController.php';
	 $key = $_GET["key"];
	 $Sessions = searchSession($key);
	 if(count ($Sessions)>0)
	 {
		 foreach ($Sessions as $k)
		 {
			 echo  "<a href='allsession.php?id=".$k["id"]."'>".$k["sname"]."</a><br>";
		 }
	 }
?>