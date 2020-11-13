<?php

require_once 'db_connect.php';

if ($_POST) {

    $id = $_POST['inv_id'];

$sql ="DELETE FROM inventory WHERE inv_id = {$id}";

    if($connect->query($sql)){
        echo "Succesfull deleted";
        echo "<a href='../index.php'><button type ='button'>Back</button></a>";
    } else {
        echo "error";
    }

    $connect->close();
}

