<?php
ob_start();
session_start();

require_once 'actions/db_connect.php';

if ($_GET['inv_id']) {
	
	$id = $_GET['inv_id'];

	$sql = "SELECT * FROM inventory WHERE inv_id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

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

	<fieldset>
   <legend>Update Inventory</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
       <tr>
               <th>Title</th >
               <td><input  type="text" name="title"  placeholder="Title" /></td >
           </tr>    
           <tr>
               <th>Type</th>
               <td><input  type="text" name= "type" placeholder="Type" /></td>
           </tr>
           <tr>
               <th>Author</th>
               <td><input  type="text" name= "author" placeholder="Author" /></td>
           </tr>
           <tr>
               <th>Author First Name</th>
               <td><input  type="text" name= "auth_first_name" placeholder="auth_first_name"/></td>
           </tr>
           <tr>
               <th>Author Last Name</th>
               <td><input  type="text" name= "auth_last_name" placeholder="auth_last_name"/></td>
           </tr>

           <tr>
               <th>Image</th>
               <td><input type="text"  name="image" placeholder ="Image" /></td>
           </tr>
           <tr>
               <th>ISBN</th>
               <td><input type="text"  name="ISBN" placeholder ="ISBN"/></td>
           </tr>
           <tr>
               <th>Publisher</th>
               <td><input type="text"  name="publisher" placeholder ="Publisher"/></td>
           </tr>
           <tr>
               <th>Publish Date</th>
               <td><input type="text"  name="publish_date" placeholder ="Publish Date"/></td>
           </tr>
           <tr>
               <th>Publisher Address</th>
               <td><input type="text"  name="pub_adress" placeholder ="Publisher Address"/></td>
           </tr>
           <tr>
               <th>Short Description</th>
               <td><input type="text"  name="short_description" placeholder ="Short Description"/></td>
           </tr>
           <tr>
               <th>Size</th>
               <td><input type="text"  name="size" placeholder ="Size"/></td>
           </tr>
           <tr>
               <th>Status</th>
               <td><input type="text"  name="status" placeholder ="Status"/></td>
           </tr>
           <tr>
               <input type="hidden" name="inv_id" value="<?php echo $data['inv_id'] ?>">
               <td><button  type= "submit">Save Changes</button></td>
               <td><a href= "index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form >

</fieldset >

</body>
</html>

<?php 
} else {
	echo "nothing";
}
?>