<?php
ob_start();
session_start();

if( !isset($_SESSION['user']) ) {
    header("Location: login.php");
    exit;
   } 


require_once 'actions/db_connect.php';

if ($_GET['inv_id']) {
	
	$id = $_GET['inv_id'];

	$sql = "SELECT * FROM inventory WHERE inv_id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html>
<head>
	<title>Inventory | update</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg  navbar-dark bg-dark sticky-top">
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
        <a class="nav-link" href="create.php">Create</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="publisher.php">Publisher</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>


    </ul>
  </div>
</nav>
<div class="container">
           <?php 

$sql = "SELECT * from inventory WHERE inv_id = {$id}";
$result =  mysqli_query($connect, $sql);//  $connect->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     echo  "

 <div class='jumbotron'>
  <h1 class='display-4'>".$row['title']."</h1>
  <hr class='my-4'>
  <p>Publishing Date: ".$row['publish_date']."</p>
  <p>Publisher: ".$row['publisher']."</p>
  <p>Type: ".$row['type']."</p>
  <p>Status: ".$row['status']."</p>


  <a href='update.php?inv_id=".$row['inv_id']."'><button type='button' class='btn btn-primary'>Update</button></a>
  <a href='delete.php?inv_id=".$row['inv_id']."'><button type='button' class='btn btn-danger'>Delete</button></a>
</div>
<div class='text-center'>
  <img src='".$row['image']."' class='rounded' alt='".$row['title']."'>
</div>

<div class='text-center'>
<p>".$row['short_description']."</p>
</div>


<ul class='list-group list-group-flush'>
  <li class='list-group-item'>1. ID: ".$row['inv_id']." </li>
  <li class='list-group-item'>2. type: ".$row['type']." </li>
  <li class='list-group-item'>3. title: ".$row['title']." </li>
  <li class='list-group-item'>4. author: ".$row['author']." </li>
  <li class='list-group-item'>5. ISBN: ".$row['ISBN']." </li>
  <li class='list-group-item'>6. publishing date: ".$row['publish_date']." </li>
  <li class='list-group-item'>7. publisher: ".$row['publisher']." </li>
  <li class='list-group-item'>8. publisher address: ".$row['pub_adress']." </li>
  <li class='list-group-item'>9. publisher size: ".$row['size']." </li>
  <li class='list-group-item'>10. status: ".$row['status']." </li>
</ul>
" ;

  }
} else {
   echo "No date available!";
}

           ?>
</div>
<nav class="navbar navbar-dark bg-dark sticky-bottom text-white mt-2">
  <a class="navbar-brand">XTREME LIBRARY</a>
    <a class="nav-link" href="logout.php?logout"><button type="button" class="btn btn-danger">Logout</button></a>
</nav>

</body>
</html>

<?php 
} else {
	echo "nothing";
}
?>



