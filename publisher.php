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
   <title>BIG-EFFING-LIBRARY</title>

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
        <a class="nav-link active" href="publisher.php">Publisher</a>
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

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">BIG-EFFING-LIBRARY</h1>
    <p class="lead">We offer a ton of non-modern types of media for you, we sell you what nobody wants anymore!</p>
  </div>
</div>
<div class="container">
  <div class="row">
  <ul class="list-group col-6">

          <?php 

          $sql = "SELECT publisher FROM inventory GROUP BY publisher";
          $result =  mysqli_query($connect, $sql);//  $connect->query($sql);

          if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo  "
               <li class='list-group-item'>".$row['publisher']."<a href='pub_details.php?publisher=".$row['publisher']."' class='card-link'>Details</a>
               </li>
               " ;
            
              }
            } else {
              echo "No date available!";
            }
            ?> 
</ul>
</div>
  </div>


  <nav class="navbar navbar-dark bg-dark fixed-bottom text-white mt-2">
  <a class="navbar-brand">XTREME LIBRARY</a>
    <a class="nav-link" href="logout.php?logout"><button type="button" class="btn btn-danger">Logout</button></a>
</nav>

</body>
</html>



