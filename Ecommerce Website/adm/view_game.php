<?php
require('../db.php');
?>
<html>   
  <head>   
    <title>Game Page</title>   
    <link rel="stylesheet"  
    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">  
    <link rel="stylesheet" href="css/style.css" /> 
    <style>   
    table {  
        border-collapse: collapse;  
    }  
        .inline{   
            margin: 20px 0px;  
            float: right; 
        }   
         
        input, button{   
            height: 34px;   
        }   
  
    .pagination {   
        display: inline-block;   
    }   
    .pagination a {   
        font-weight:bold;   
        font-size:18px;   
        color: black;   
        float: left;   
        padding: 8px 16px;   
        text-decoration: none;   
        border:1px solid black;   
    }   
    .pagination a.active {   
            background-color: pink;   
    }   
    .pagination a:hover:not(.active) {   
        background-color: skyblue;   
    } 
    img{
      width:100px;
      height:100px;
    }  
    .container{
        position:relative;
    }
    
        </style>   
  </head>   
  <body>   
  <div id="header">
            <h1>Geez Movie Center</h1>
            <h2>Admin Panel</h2>
        </div>

        <div id="nav">
                <h1>Navigation</h1>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="view_series_movies.php">View Series</a></li>
                    <li><a href="view_movie.php">View Movie</a></li>
                    <li><a href="view_amharic.php">View Amharic</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>

  <center>  
    <?php  
      
    // Import the file where we defined the connection to Database.     
    
    
        $per_page_record = 20;  // Number of entries to show in a page.   
        // Look for a GET variable page if not found default is 1.        
        if (isset($_GET["page"])) {    
            $page  = $_GET["page"];    
        }    
        else {    
          $page=1;    
        }    
    
        $start_from = ($page-1) * $per_page_record;     
    
        $query = "SELECT * FROM games LIMIT $start_from, $per_page_record";     
        $rs_result = mysqli_query ($con, $query);    
    ?>    
  
    <div class="container">   
      <br>   
      <div> 
        <table class="table table-striped table-condensed    
                                          table-bordered">   
          <thead>   
            <tr>   
              <th width="10%">ID</th>   
              <th><strong>Image</strong></th>
              <th>title</th>   
              <th>year</th>    
              <th>description</th> 
              <th><strong>Delete</strong></th>
            </tr>   
          </thead>   
          <tbody>   
    <?php     
    $count=1;
            while ($row = mysqli_fetch_array($rs_result)) {    
                  // Display each field of the records.    
            ?>     
            <tr>     
            <tr><td><?php echo $count; ?></td>
             <td><?php echo "<img src='../images/game/".$row['image']."'>" ?></td>   
            <td><?php echo $row["title"]; ?></td>   
            <td><?php echo $row["Year"]; ?></td>   
            <td><?php echo $row["description"]; ?></td>   
            <td>
            <a href="delete.php?gameid=<?php echo $row["id"]; ?>">Delete</a>
            </td>                                        
            </tr>   
            <?php $count++;  ?>  
            <?php     
                };    
            ?>     
          </tbody>   
        </table>   
  
     <div class="pagination">    
      <?php  
        $query = "SELECT COUNT(*) FROM games";     
        $rs_result = mysqli_query($con, $query);     
        $row = mysqli_fetch_row($rs_result);     
        $total_records = $row[0];     
          
    echo "</br>";     
        // Number of pages required.   
        $total_pages = ceil($total_records / $per_page_record);     
        $pagLink = "";       
      
        if($page>=2){   
            echo "<a href='view_game.php?page=".($page-1)."'>  Prev </a>";   
        }       
                   
        for ($i=1; $i<=$total_pages; $i++) {   
          if ($i == $page) {   
              $pagLink .= "<a class = 'active' href='view_game.php?page="  
                                                .$i."'>".$i." </a>";   
          }               
          else  {   
              $pagLink .= "<a href='view_game.php?page=".$i."'>   
                                                ".$i." </a>";     
          }   
        };     
        echo $pagLink;   
  
        if($page<$total_pages){   
            echo "<a href='view_game.php?page=".($page+1)."'>  Next </a>";   
        }   
  
      ?>    
      </div>  
  
  
      <div class="inline">   
      <input id="page" type="number" min="1" max="<?php echo $total_pages?>"   
      placeholder="<?php echo $page."/".$total_pages; ?>" required>   
      <button onClick="go2Page();">Go</button>   
     </div>    
    </div>   
  </div>  
</center>  
<footer>
<div id="footer">
            2020 Geez Movie Center
</div>
        </footer> 
  <script>   
    function go2Page()   
    {   
        var page = document.getElementById("page").value;   
        page = ((page><?php echo $total_pages; ?>)?<?php echo $total_pages; ?>:((page<1)?1:page));   
        window.location.href = 'view_game.php?page='+page;   
    }   
  </script>  
  
  </body>   
</html> 