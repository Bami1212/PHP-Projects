<?php 
if(isset($_POST['upload'])){

    $target="../../images/shop/".basename($_FILES['image']['name']);
    $con = mysqli_connect("localhost","root","","geezgebeya");
    $image= $_FILES['image']['name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $location=$_POST['location'];
    $shopid=$_POST['shopid'];
    $shoplink=$_POST['shoplink'];
    $sql = "INSERT INTO shops (shopname,image, description, location, shopid, shoplink) VALUES ('$title','$image','$description','$location','$shopid','$shoplink')";

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
    <title>Add Amharic Movies</title>
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
     <h1>Add Amharic Movies</h1>
     <br>
 </div>
    <div class="back">
        <a href="../add_files.php"> <-- Back</a>
     </div>  
  

<div class="container">

        


<form method="POST" action="adduser.php" enctype="multipart/form-data">
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
                                <label for="title">shopname</label>
                            </td>
                            <td>
                                <input class="fr" type="text" name="title" id="title" placeholder="Enter The Title" required>
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
                                <label for="location">Location</label>
                            </td>
                            <td>
                                <input class="fr" type="text" name="location" id="location" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="shopid">shopid</label>
                            </td>
                            <td>
                                <input class="fr" type="text" name="shopid" id="shopid" required>
                            </td>
                        </tr>
                      
                        <tr>
                            <td>
                                <label for="shoplink">Shop Link</label>
                            </td>
                            <td>
                                <input class="fr" type="text" name="shoplink" id="shoplink" required>
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