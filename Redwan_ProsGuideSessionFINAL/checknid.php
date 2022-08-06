<?php

    require "controllers\User_aController.php";
    $nid=$_GET["nid"];
    $check=checkNID($nid);
    if($check){
        echo "true";
    }else echo "false";
?>