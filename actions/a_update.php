<?php

require_once 'db_connect.php';

if ($_POST['inv_id']) {
	
	$id = $_POST['inv_id'];
    $inv_title = $_POST['title'];
    $inv_type = $_POST['type'];
    $inv_author = $_POST['author'];
    $inv_auth_first_name = $_POST['auth_first_name'];
    $inv_auth_last_name = $_POST['auth_last_name'];
    $inv_image = $_POST['image'];
    $inv_isbn = $_POST['ISBN'];
    $inv_publisher = $_POST['publisher'];
    $inv_pub_date = $_POST['publish_date'];
    $inv_pub_address = $_POST['pub_adress'];
    $inv_short_descr = $_POST['short_description'];
    $inv_size = $_POST['size'];
    $inv_status = $_POST['status'];

	$sql = "UPDATE `inventory` SET `title`= '$inv_title',`type`= '$inv_type',`author`= '$inv_author',`auth_first_name`= '$inv_auth_first_name',
				   `auth_last_name`= '$inv_auth_last_name',`image`= '$inv_image',`ISBN`= '$inv_isbn',`publisher`= '$inv_publisher',`publish_date`= '$inv_pub_date',
				   `pub_adress`= '$inv_pub_address',`short_description`= '$inv_short_descr',`size`= '$inv_size',`status`= '$inv_status' WHERE inv_id = {$id} ";
	if ($connect->query($sql) === TRUE) {
		echo "update succesfull!";
		echo "<a href='../update.php?inv_id=" . $id ."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "failed" . $connect->error;
	}

	$connect->close();
}





