



<?php
$connect = mysqli_connect("localhost", "root", "", "geezmovie");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM games 
	WHERE title LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM games ORDER BY id";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
		<div class="movie-item-style-2">
              <img src="images/game/'.$row['image'].'">
              <div class="mv-item-infor">
              <h6>
              <a>'.$row["title"].'
              <span>'.'('.$row['Year'].')'.'</span>
              </a>
              </h6>
              <p class="describe">'.$row['description'].'</p>
              <p> Minimum Requirements: 
              <a>'.$row['Minimum_requirements'].'</a>
              </p>
              </div>
              </div>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>