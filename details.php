<?php

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
<div class ="manageMeal">
   <a href= "create.php"><button type="button" >Add Meal</button></a>
   <table  border="1" cellspacing= "0" cellpadding="0">
       <thead>
           <tr>
               <th>Inv ID</th>
               <th>Title</th>
               <th>Type</th>
               <th >Author</th>
               <th >Author First Name</th>
               <th >Author Last Name</th>
               <th >Image</th>
               <th >ISBN</th>
               <th >Publisher</th>
               <th >Publish Date</th>
               <th >Publisher Adress</th>
               <th >Short Description</th>
               <th >Size</th>
               <th >Status</th>
           </tr>
       </thead>
       <tbody>
           <?php 

$sql = "SELECT * from inventory WHERE inv_id = {$id}";
$result =  mysqli_query($connect, $sql);//  $connect->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
     echo  "<tr>
            <td>" .$row['inv_id']."</td>
            <td>" .$row['title']."</td>
            <td>" .$row['type']."</td>
            <td>" .$row['author']."</td>
            <td>" .$row['auth_first_name']."</td>
            <td>" .$row['auth_last_name']."</td>
            <td>" .$row['image']."</td>
            <td>" .$row['ISBN']."</td>
            <td>" .$row['publisher']."</td>
            <td>" .$row['publish_date']."</td>
            <td>" .$row['pub_adress']."</td>
            <td>" .$row['short_description']."</td>
            <td>" .$row['size']."</td>
            <td>" .$row['status']."</td>
            <td>
                <a href='update.php?inv_id=" .$row['inv_id']."'><button type='button'>Edit</button></a>
                <a href='delete.php?inv_id=" .$row['inv_id']."'><button type='button'>Delete</button></a>
                <a href='details.php?inv_id=" .$row['inv_id']."'><button type='button'>Details</button></a>
            </td>
        </tr>" ;

  }
} else {
   echo "No date available!";
}

           ?>
       </tbody>
   </table>
</div>

</body>
</html>

<?php 
} else {
	echo "nothing";
}
?>