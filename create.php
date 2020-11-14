<?php
ob_start();
session_start();

if( !isset($_SESSION['user']) ) {
    header("Location: login.php");
    exit;
   } 
   require_once 'actions/db_connect.php';


?>



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
        <a class="nav-link active" href="create.php">Create</a>
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
<h2 class="p-4">Add a new item to the inventory</h2>
<!-- Extended default form grid -->
<form action="actions/a_create.php" method= "post">
  <!-- Grid row -->
  <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputEmail4">Title</label>
      <input type="text" name="title" class="form-control" id="inputEmail4" placeholder="Title">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputPassword4">Type</label>
      <select class="form-control" id="exampleFormControlSelect1" name="type">
      <option>Book</option>
      <option>CD</option>
      <option>DVD</option>
    </select>
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">IMAGE LINK</label>
    <input type="text" name="image" class="form-control" id="exampleFormControlInput1" placeholder="imagelink">
  </div>

  <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputEmail4">Author First Name</label>
      <input type="text" name= "auth_first_name" class="form-control" id="inputEmail4" placeholder="Author First Name">
    </div>
    <!-- <div class="form-group col-md-6">
      <label for="inputEmail4">Author</label>
      <input type="text" name= "author" class="form-control" id="inputEmail4" placeholder="Author">
    </div> -->

    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputPassword4">Author Last Name</label>
      <input type="text" name= "auth_last_name" class="form-control" id="inputPassword4" placeholder="Author Last Name">
    </div>
  </div>
  <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputEmail4">ISBN</label>
      <input type="text" name="ISBN" class="form-control" id="inputEmail4" placeholder="ISBN">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputPassword4">Publisher</label>
      <input type="text" name="publisher" class="form-control" id="inputPassword4" placeholder="Publisher">
    </div>
  </div>
  <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputEmail4">Publishing date</label>
      <input class="form-control"name="publish_date"  type="date" value="2011-08-19" id="example-date-input">
    </div>
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputPassword4">Publisher Address</label>
      <input type="text" name="pub_adress" class="form-control" id="inputPassword4" placeholder="Publisher Address">
    </div>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Short Description</label>
    <textarea type="text" class="form-control"name="short_description" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <div class="form-row">
    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputPassword4">Size</label>
      <select class="form-control" id="exampleFormControlSelect1" name="size">
      <option>Small</option>
      <option>Medium</option>
      <option>Big</option>
    </select>
    </div>

    <!-- Default input -->
    <div class="form-group col-md-6">
      <label for="inputPassword4">Status</label>
      <select class="form-control" id="exampleFormControlSelect1" name="status">
      <option>available</option>
      <option>not available</option>
    </select>
    </div>
  <button type="submit" class="btn btn-primary btn-md">Add to Inventory</button>
</form>


    </div>
    </div>
    <nav class="navbar navbar-dark bg-dark fixed-bottom text-white mt-2">
  <a class="navbar-brand">XTREME LIBRARY</a>
    <a class="nav-link" href="logout.php?logout"><button type="button" class="btn btn-danger">Logout</button></a>
</nav>

</body>
</html>