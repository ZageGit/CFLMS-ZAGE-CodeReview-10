<?php require_once 'db_connect.php';

if($_POST){
    $inv_title = $_POST['title'];
    $inv_type = $_POST['type'];
    //$inv_author = $_POST['author'];
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



    $sql_inv ="INSERT INTO inventory (title, type, auth_first_name, auth_last_name, image, ISBN, publisher, publish_date, pub_adress, short_description, size, status)
    VALUES ('$inv_title','$inv_type','$inv_auth_first_name','$inv_auth_last_name','$inv_image','$inv_isbn','$inv_publisher','$inv_pub_date','$inv_pub_address','$inv_short_descr','$inv_size','$inv_status')";
   
    if($connect->query($sql_inv)) {

        echo "Success ingredients <br>";
        echo "<a href='../index.php'><button type='button'>HOME</button></a> <br>";
        echo "<a href='../create.php'><button type='button'>BACK</button></a> <br>";
    } else {
        echo "<br>Add to inventory not succesfull<br>";
    }

}

$connect->close();


