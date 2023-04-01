<?php
require('../db.php');
if (isset($_GET['sid'])) {
$id=$_GET['sid'];
$query = "DELETE FROM series_movies WHERE id=$id"; 
$result = mysqli_query($con,$query);
header("Location: view_series_movies.php"); 
}
if (isset($_GET['movieid'])) {
    $id = $_GET['movieid'];
    $query = "DELETE FROM movies WHERE id=$id"; 
    $result = mysqli_query($con,$query);
	header("Location: view_movie.php"); 
}
if (isset($_GET['gameid'])) {
$id=$_GET['gameid'];
  $query = "DELETE FROM games WHERE id=$id"; 
  $result = mysqli_query($con,$query) ;
  header("Location: view_game.php"); 
}
if (isset($_GET['amhid'])) {
  $id=$_GET['amhid'];
    $query = "DELETE FROM amharic WHERE id=$id"; 
    $result = mysqli_query($con,$query) ;
    header("Location: view_amharic.php"); 
  }
?>