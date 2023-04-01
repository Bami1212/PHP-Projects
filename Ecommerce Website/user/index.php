<?php
include("auth.php");

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
        <div id="header">
            <h1>Geez Gebeya</h1>
            <h2>User Panel</h2>
        </div>

        <div id="subcont">

            <div id="nav">
                <h1>Navigation</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="add_files.php">Add Files</a></li>
                    <li><a href="view_item.php">View your items</a></li>
                    <li><a href="passwordchange.php">Change Password</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

            <div id="content">
                <div class="form">
                    <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
                    <p>We Highly recommend to change your password if this is your first time login</p>

                </div>
            </div>
            <div id="footer">
                2020 Geez Gebeya
            </div>
        </div>
    </div>
</body>

</html>