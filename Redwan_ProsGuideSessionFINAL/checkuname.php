<?php

    require "controllers\User_aController.php";
    $uname=$_GET["uname"];
    $check=checkUname($uname);
    if($check){
        echo "true";
    }else echo "false";
?>