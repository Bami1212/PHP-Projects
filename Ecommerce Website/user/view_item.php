<?php
require('../db.php');
include("auth.php");
?>
<html>

<head>
  <title>Item Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css" />
  <style>
    .inline {
      float: right;
      margin: 20px 0px;
    }

    input,
    button {
      height: 34px;
    }

    .pagination {
      display: inline-block;
    }

    .pagination a {
      font-weight: bold;
      font-size: 18px;
      color: black;
      float: left;
      padding: 8px 16px;
      text-decoration: none;
      border: 1px solid black;
    }

    .pagination a.active {
      background-color: pink;
    }

    .pagination a:hover:not(.active) {
      background-color: skyblue;
    }

    img {
      width: 100px;
      height: 100px;
    }
  </style>
</head>

<body>
  <div id="header">
    <h1>Geez Gebeya</h1>
    <h2>User Panel</h2>
  </div>

  <div id="nav">
    <h1>Navigation</h1>
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>

  <center>
    <?php

    // Import the file where we defined the connection to Database.     


    // Look for a GET variable page if not found default is 1.        
    if (isset($_GET["page"])) {
      $page  = $_GET["page"];
    } else {
      $page = 1;
    }
    $per_page_record = 30;  // Number of entries to show in a page. 
    $start_from = ($page - 1) * $per_page_record;
    $name = $_SESSION['username'];
    $que = "SELECT shopid from user_profile where full_name='$name'";
    $rs = mysqli_query($con, $que);
    $ro = mysqli_fetch_array($rs);
    $id = $ro[0];
    $query = "SELECT * FROM items WHERE shopid='$id' LIMIT $start_from, $per_page_record";
    $rs_result = mysqli_query($con, $query);
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
              <th>name</th>
              <th>description</th>
              <th>price</th>
              <th><strong>Delete</strong></th>
            </tr>
          </thead>
          <tbody>
            <?php
            $count = 1;
            while ($row = mysqli_fetch_array($rs_result)) {
              // Display each field of the records.    
            ?>
              <tr>
              <tr>
                <td><?php echo $count; ?></td>
                <td><?php echo "<img src='../images/uploads/" . $row['image'] . "'>" ?></td>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["description"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td>
                  <a href="delete.php?itemid=<?php echo $row["id"]; ?>">Delete</a>
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
          $query = "SELECT COUNT(*) FROM items WHERE shopid='$id'";
          $rs_result = mysqli_query($con, $query);
          $row = mysqli_fetch_row($rs_result);
          $total_records = $row[0];

          echo "</br>";
          // Number of pages required.   
          $total_pages = ceil($total_records / $per_page_record);
          $pagLink = "";

          if ($page >= 2) {
            echo "<a href='view_item.php?page=" . ($page - 1) . "'>  Prev </a>";
          }

          for ($i = 1; $i <= $total_pages; $i++) {
            if ($i == $page) {
              $pagLink .= "<a class = 'active' href='view_item.php?page="
                . $i . "'>" . $i . " </a>";
            } else {
              $pagLink .= "<a href='view_item.php?page=" . $i . "'>   
                                                " . $i . " </a>";
            }
          };
          echo $pagLink;

          if ($page < $total_pages) {
            echo "<a href='view_item.php?page=" . ($page + 1) . "'>  Next </a>";
          }

          ?>
        </div>


        <div class="inline">
          <input id="page" type="number" min="1" max="<?php echo $total_pages ?>" placeholder="<?php echo $page . "/" . $total_pages; ?>" required>
          <button onClick="go2Page();">Go</button>
        </div>
      </div>
    </div>
  </center>
  <footer>
    <div id="footer">
      2020 Geez Gebeya
    </div>
  </footer>
  <script>
    function go2Page() {
      var page = document.getElementById("page").value;
      page = ((page > <?php echo $total_pages; ?>) ? <?php echo $total_pages; ?> : ((page < 1) ? 1 : page));
      window.location.href = 'view_item.php?page=' + page;
    }
  </script>

</body>

</html>