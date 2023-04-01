<?php 
if(isset($_POST['upload'])){

    $target="../../images/game/".basename($_FILES['image']['name']);
    $con = mysqli_connect("localhost","root","","geezmovie");
    $image= $_FILES['image']['name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $year=$_POST['year'];
    $mini=$_POST['mini'];
    $sql = "INSERT INTO games (image, title, year, description, Minimum_requirements) VALUES ('$image','$title','$year','$description','$mini')";

    mysqli_query($con,$sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg="Image Uploaded Successfully";
    }
    else{
        $msg="there was a problem uploading";
    }




}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Game</title>
    <link rel="stylesheet" href="../css/style.css">
    <style>
     input[type='submit']{
        margin-left: 200px;
     }
 </style>
 
</head>
</head>
<body>
<div id="header">
     <h1>Add Game</h1>
     <br>
 </div>
    <div class="back">
        <a href="../add_files.php"> <-- Back</a>
     </div>  
  

<div class="container">

        


                <form method="POST" action="add.php" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                    <table>
                        <tr>
                            <td>
                                <label for="image">Insert Image</label>
                            </td>
                            <td>
                                 <input type="file" name="image" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="title">Title</label>
                            </td>
                            <td>
                                <input class="fr" type="text" name="title" id="title" placeholder="Enter The Title" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="year">Year</label>
                            </td>
                            <td>
                                <input class="fr" type="text" name="year" id="year" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Description</label>
                            </td>
                            <td>
                            <textarea class="fr" name="description" id="description" cols="30" rows="10" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="mini">Minimum Requirements</label>
                            </td>
                            <td>
                                <textarea class="fr" name="mini" id="mini" cols="30" rows="10" required></textarea>
                            </td>
                        </tr>
                        
                        
                    </table>
                    <br> <input type="submit" name="upload" value="Upload Image">
                </form>
            
    
    <footer>
            <div id="footer">
            2020 Geez Movie Center
            </div>
   </footer> 
</div>



      
        
</body>
</html>