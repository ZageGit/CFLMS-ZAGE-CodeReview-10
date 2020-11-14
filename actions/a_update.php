<!DOCTYPE html>
<html>
<head>
   <title>Library - Add to Inventory</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">XTREME LIBRARY</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="inventory.php">All items</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="books.php">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cds.php">CD's</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="dvds.php">DVD's</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="create.php">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="publisher.php">Publisher</a>
      </li>
   </ul>
  </div>
</nav>
<div class="container mt-4">


<?php

require_once 'db_connect.php';

if ($_POST['inv_id']) {
	
	$id = $_POST['inv_id'];
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

	$sql = "UPDATE `inventory` SET `title`= '$inv_title',`type`= '$inv_type',`auth_first_name`= '$inv_auth_first_name',
				   `auth_last_name`= '$inv_auth_last_name',`image`= '$inv_image',`ISBN`= '$inv_isbn',`publisher`= '$inv_publisher',`publish_date`= '$inv_pub_date',
				   `pub_adress`= '$inv_pub_address',`short_description`= '$inv_short_descr',`size`= '$inv_size',`status`= '$inv_status' WHERE inv_id = {$id} ";
	if ($connect->query($sql) === TRUE) {
		echo "<div class='alert alert-success' role='alert'>
        Update successful!
      </div>";
		echo "<a href='../update.php?inv_id=" . $id ."'><button type='button' class='btn btn-primary'>Back</button></a>";
		echo "<a href='../index.php'><button type='button' class='btn btn-success'>Home</button></a>";
	} else {
		echo "failed" . $connect->error;
	}

	$connect->close();
}
?>
</div>
</body>
</html>



