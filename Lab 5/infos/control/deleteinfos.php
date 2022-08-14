<?php
require('../model/db.php');
if (isset($_POST['delete'])) {
    $connection = new db();
    $conobj = $connection->OpenCon();
    $userdata = $connection->deleteinfos($conobj, $_POST["id"]);
    $connection->CloseCon($conobj);
    header("Location: ../view/home.php");
}