<?php


require_once 'actions/db_connect.php';

if ($_GET['inv_id']) {
    $id = $_GET['inv_id'];

$sql = "SELECT * FROM inventory WHERE inv_id = {$id}";
$result = $connect->query($sql);
$data = $result->fetch_assoc();


?>

<html>
<head>
   <title >Delete meal</title>

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
    <li class="nav-item active">
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
   </ul>
  </div>
</nav>
<div class="container">
<div class="alert alert-danger mt-4 mb-4" role="alert">
Do you really want to delete this item from the Inventory?
</div>
<div class="row d-flex justify-content-center">
<?php 
$sql = "SELECT * from inventory WHERE inv_id = {$id}";
$result =  mysqli_query($connect, $sql);//  $connect->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo  "
       <div class='card col-3'>
       <img class='card-img-top' src='".$row['image']."' alt='Card image cap'>
         <div class='card-body'>
           <h5 class='card-title'>".$row['title']."</h5>
           <p class='card-text'>".$row['short_description']."</p>
           </div>
             <ul class='list-group list-group-flush'>
                 <li class='list-group-item'>".$row['type']."</li>
                 <li class='list-group-item'>".$row['author']."</li>
             </ul>
       <div class='card-body'>
  " ;
    }
  } else {
     echo "No date available!";
  }
  

?>


<form action ="actions/a_delete.php" method="post">
   <input type="hidden" name= "inv_id" value="<?php echo $data['inv_id'] ?>" />
   <button type="submit" class="btn btn-success">Yes, delete</button>
   <a href="index.php"><button type="button" class="btn btn-danger">Go back</button></a>
</form>

       </div>
   </div>
</div>
</div>
</body>
</html>


<?php
}
?>