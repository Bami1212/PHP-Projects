<?php
require('../db.php');
include('../function1.php');
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7 no-js" lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8 no-js" lang="en-US">
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- movielist07:38-->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geez Gebeya | Shops</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../stylee.css" type="text/css">



</head>

<body>
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img src="../img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="../index.php">Home</a></li>
                            <li class="active"><a href="shops.php">Shops</a></li>
                            <li>Categories
                                <ul class="dropdown">
                                    <li><a href="../electronics.php">Electronics</a></li>
                                    <li><a href="../fashion.php">Fashion</a></li>
                                    <li><a href="../cosmetic.php">Cosemotics</a></li>
                                    <li><a href="#">Add</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">Blog</a></li>
                            <li><a href="./contact.html">Contact</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- END | Header -->


    <div class="page-single movie_list">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <?php


                        $sql = "SELECT * FROM user_profile where shop_type='electronics'";
                        $result = mysqli_query($con, $sql);
                        $row = mysqli_num_rows($result);
                        echo "<p>" . 'Shops Registered: ';
                        echo "<span>" . $row . "</span>";
                        echo "</p>";


                        ?>
                        <a href="shops.php" class="active">See All</a>

                    </div>
                    <div class="content" id="jar">
                        <?php
                        $per_page_record = 10;  // Number of entries to show in a page.   
                        // Look for a GET variable page if not found default is 1.        
                        if (isset($_GET["page"])) {
                            $page  = $_GET["page"];
                        } else {
                            $page = 1;
                        }



                        //  $sql = "SELECT *FROM series_movies LIMIT " . $page_first_result . ',' . $results_per_page;
                        //  $res = mysqli_query($con, $sql);



                        $start_from = ($page - 1) * $per_page_record;
                        $statement = "user_profile where shop_type='electronics'";
                        $query = "SELECT * FROM user_profile where shop_type='electronics' LIMIT $start_from, $per_page_record ";
                        $rs_result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($rs_result)) {
                            echo "<div class='movie-item-style-2'>";
                            echo "<img src='../images/uploads/" . $row['shopimage'] . "'>";
                            echo "<div class='mv-item-infor'>";
                            echo "<h6>";
                            echo "<a>" . $row['shop_name'] . "</a>";
                            echo "</h6>";
                            echo "<p class='describe'>" . $row['description'] . "</p>";
                            echo "<p class='location'>" . 'Location: ';
                            echo "<a>" . $row['address'] . "</a>";
                            echo "</p>";
                            echo "<p class='phonenumber'>" . 'Phone Number: ';
                            echo "<a>" . $row['mobile'] . "</a>";
                            echo "</p>";
                            echo "<div class='link'>";
                            echo "<a class='shophere' href='display.php?display=" . base64_encode($row['shopid']) . "'>" . 'Shop Here' . "</a>";
                            echo "</div>";
                            echo "</div>";

                            echo "</div>";
                        }



                        ?>
                    </div>



                    <div class="topbar-filter">


                        <div class="pagination__option">
                            <?php
                            echo pagination($statement, $per_page_record, $page);

                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">

                        <div class="ads">
                            <h4 class="sb-title">Shop Types</h4>
                            <p><a href="electronics.php">Electronics</a></p>
                            <p><a href="fashion.php">Fashion</a></p>
                            <p><a href="cosemotics.php">Cosemotics</a></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section-->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-7">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="./index.html"><img src="../img/logo.png" alt=""></a>
                        </div>
                        <p></p>

                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-5">
                    <div class="footer__widget">
                        <h6>Quick links</h6>
                        <ul>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Blogs</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="footer__widget">
                        <h6>Account</h6>
                        <ul>
                            <li><a href="https://t.me/geezmovie">Telegram</a></li>
                            <li><a href="https://bit.ly/37aOmuu">Youtube</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8 col-sm-8">
                    <div class="footer__newslatter">

                        <div class="footer__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    <div class="footer__copyright__text">
                        <p>Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved </p>
                    </div>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer section-->

    <script src="../js/jquery.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/plugins2.js"></script>
    <script src="../js/custom.js"></script>
</body>

<!-- movielist07:38-->

</html>