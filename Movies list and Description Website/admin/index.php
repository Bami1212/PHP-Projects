<?php
include("../auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div id="container">
    <div id = "header">
    <h1>Geez Movie Center</h1>
    <h2>Admin Panel</h2>
    </div>

    <div id="subcont">
    
    <div id="nav">
        <h1>Navigation</h1>
            <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="register.php">Add Admin</a></li>
                    <li><a href="add_files.php">Add Files</a></li>
                    <li><a href="view_series_movies.php">View series</a></li>
                    <li><a href="view_movie.php">View movie</a></li>
                    <li><a href="view_game.php">View game</a></li>
                    <li><a href="logout.php">Logout</a></li>
            </ul>
    </div>

    <div id="content">
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is the admin area.</p>
</div>
    </div>
<div id="footer">
            2020 Geez Movie center
</div>
</div>
</body>
</html>