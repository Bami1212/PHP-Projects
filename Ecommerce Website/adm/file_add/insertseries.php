<?php 
if(isset($_POST['upload'])){

    $target="../../images/uploads/".basename($_FILES['image']['name']);
    $con = mysqli_connect("localhost","root","","geezgebeya");
    $image= $_FILES['image']['name'];
    $title=$_POST['title'];
    $description=$_POST['description'];
    $rating=$_POST['rating'];
    $sql = "INSERT INTO shops (image,title,description,rating) VALUES ('$image','$title','$description','$rating')";

    mysqli_query($con,$sql);
    function function_alert($message) { 
      
        // Display the alert box  
        echo "<script>alert('$message');</script>"; 
    } 
    if (move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg="Image Uploaded Successfully";
        function_alert($msg);
    }
    else{
        $msg="there was a problem uploading";
        function_alert($msg);
    }




}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Series</title>
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
     <h1>Add Series</h1>
     <br>
 </div>
 <div class="back">
        <a href="../add_files.php"> <-- Back</a>
     </div>  
<div class="section">


                <form method="POST" action="insertseries.php" enctype="multipart/form-data">
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
                                <label for="description">Description</label>
                            </td>
                            <td>
                            <textarea class="fr" name="description" id="description" cols="30" rows="10" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="rating">Rating</label>
                            </td>
                            <td>
                                <input class="fr" type="text" name="rating" id="rating" required>
                            </td>
                        </tr>
                        
                        
                    </table>
                    <br> <input type="submit" name="upload" value="Upload Image">
                </form>
           
    </div>





    <footer>
            <div id="footer">
            2020 Geez Movie Center
            </div>
   </footer> 
        
</body>
</html>