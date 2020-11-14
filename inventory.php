<?php 
ob_start();
session_start();

if( !isset($_SESSION['user']) ) {
    header("Location: login.php");
    exit;
   } 

   require_once 'actions/db_connect.php';
?>

<html>
<head>
   <title>All Current Items</title>

   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="css/style.css">
   
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

      <li class="nav-item active">
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
<div class="row">
<?php 

$sql = "SELECT * FROM inventory";
$result =  mysqli_query($connect, $sql);//  $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo  "
      <div class='card col-3 m-2'>
      <img class='card-img-top' src='".$row['image']."' alt='Card image cap'>
        <div class='card-body'>
          <h5 class='card-title'>".$row['title']."</h5>
         </div>
            <ul class='list-group list-group-flush'>
                <li class='list-group-item'>Type: ".$row['type']."</li>
                <li class='list-group-item'>Author: ".$row['author']."</li>
            </ul>
      <div class='card-body'>
      <a href='details.php?inv_id=".$row['inv_id']."'><button type='button' class='btn btn-primary'>Details</button></a>
      </div>
  </div>
" ;
  
    }
  } else {
    echo "No date available!";
  }
?> 

</div>
</div>
<nav class="navbar navbar-dark bg-dark sticky-bottom text-white mt-2">
  <a class="navbar-brand">XTREME LIBRARY</a>
    <a class="nav-link" href="logout.php?logout"><button type="button" class="btn btn-danger">Logout</button></a>
</nav>

</body>
</html>