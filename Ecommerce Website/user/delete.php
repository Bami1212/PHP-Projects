<?php
require('../db.php');

if (isset($_GET['itemid'])) {
  $id=$_GET['itemid'];
    $query = "DELETE FROM items WHERE id=$id"; 
    $result = mysqli_query($con,$query) ;
    header("Location: view_item.php"); 
  }
?>