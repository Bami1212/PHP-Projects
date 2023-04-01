<?php require'db.php';
include('function1.php'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ashion | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="stylee.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->

    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="shops/shops.php">Shops</a></li>
                            <li><a href="#">Categories</a>
                                <ul class="dropdown">
                                    <li><a href="electronics.php">Electronics</a></li>
                                    <li><a href="fashion.php">Fashion</a></li>
                                    <li><a href="cosmetic.php">Cosmetic</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
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
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i> Home</a>
                        <span>Fashion</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="shop__sidebar">
                        <div class="sidebar__categories">
                            <div class="section-title">
                                <h4>Categories</h4>
                            </div>
                            <div class="categories__accordion">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-heading ">
                                            <a href="electronics.php">Electronics</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a href="fashion.php">Fashion</a>
                                        </div>
                                      
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a href="cosmetic.php">Cosmetic</a>
                                        </div>
                                     
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a>Accessories</a>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-heading">
                                            <a>Cosmetic</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-9">
                    <div class="row property__gallery">
                    <?php 
                $per_page_record = 20;  // Number of entries to show in a page.   
                // Look for a GET variable page if not found default is 1.        
                if (isset($_GET["page"])) {    
                    $page  = $_GET["page"];    
                }    
                else {    
                  $page=1;    
                }    
            
                $start_from = ($page-1) * $per_page_record;       
                                             $statement = "items WHERE itemtype='fashion' ORDER BY currenttime DESC";
                                             $query = "SELECT * FROM items WHERE itemtype='fashion' ORDER BY currenttime DESC LIMIT $start_from, $per_page_record";     
                                              
                                             $rs_result = mysqli_query ($con, $query); 
                                                while($row = mysqli_fetch_array($rs_result)){
                                                    echo "<div class='col-lg-4 col-md-6'>";
                                                    echo "<div class='product__item'>";
                                                    echo "<div class='product__item__pic set-bg'>";
                                                       echo "<img src='images/uploads/".$row['image']."'>";
                                                       echo "<div class='product-overlay'>";
                                                       echo "<div class='overlay-content'>";
                                                            echo "<h2>".'$'.$row['price']."</h2>";
                                                            echo "<p>".$row['description']."</p>";

                                                      
                                                       echo "</div>";
                                                       echo "</div>";
                                                       echo "</div>";
                                                       echo "<div class='product__item__text'>";
                                                       echo "<h6>";
                                                       echo "<a>".$row['name']."</a>";
                                                       echo "</h6>";
                                                       echo "<div class='product__price'>".'$'.$row['price']."</div>";
                                                       echo "<div class='product__price'>".'Phone:-'.$row['phoneno']."</div>";
                                                       echo "</div>";
                                                       echo "</div>";
                                                   echo "</div>";
                                                  }
                                           
                                          
                                     
                                         ?>
               
                
                    
                  
                      
                     
                   
                        <div class="col-lg-12 text-center">
                            <div class="pagination__option">
                            <?php  
  echo pagination($statement,$per_page_record,$page); 
  
      ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->


    <!-- Footer Section Begin -->
    <footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
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
                        <script>document.write(new Date().getFullYear());</script> All rights reserved </p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
    <!-- Footer Section End -->

    <!-- Search Begin -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>