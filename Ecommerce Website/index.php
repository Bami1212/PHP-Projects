<?php require('db.php');
include('function1.php'); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Geez Gebeya</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

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
    
         
    ?>
    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>

        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>

    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="index.php">Home</a></li>
                            <li><a href="shops/shops.php">Shops</a></li>
                            <li>Categories
                                <ul class="dropdown">
                                    <li><a href="electronics.php">Electronics</a></li>
                                    <li><a href="fashion.php">Fashion</a></li>
                                    <li><a href="cosmetic">Cosemotics</a></li>
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
    <!-- Header Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 p-0">
                    <div class="categories__item categories__large__item set-bg" data-setbg="img/phones.jpg">
                        <div class="categories__text">
                            <h1>Electronics</h1>

                            <a href="electronics.php">Shop now</a>
                        </div>
                    </div>
                    <div class="categories__item categories__large__item set-bg" data-setbg="img/shoes.jpg">
                        <div class="categories__text">
                            <h1>Fashion</h1>
                            <a href="fashion.php">Shop now</a>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="img/categories/category-2.jpg">
                                <div class="categories__text">
                                    <h4>Men’s fashion</h4>
                                    <p>358 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="img/categories/category-3.jpg">
                                <div class="categories__text">
                                    <h4>Kid’s fashion</h4>
                                    <p>273 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="img/categories/category-4.jpg">
                                <div class="categories__text">
                                    <h4>Cosmetics</h4>
                                    <a href="cosmetic.php">Shop now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 p-0">
                            <div class="categories__item set-bg" data-setbg="img/categories/category-5.jpg">
                                <div class="categories__text">
                                    <h4>Accessories</h4>
                                    <p>792 items</p>
                                    <a href="#">Shop now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="section-title">
                        <h4>New product</h4>
                    </div>
                </div>
                <div class="topsearch">
                    <form autocomplete="off" method="post" action="index.php">
                        <input type="text" class="itemname" name="searchitem" placeholder="Search for Items" required />
                        <input type="submit" class="btn_submit" value="Search">
                    </form>
                </div>
            </div>

            <div class="row property__gallery">

                <?php
           
    
                	if (isset($_POST['searchitem'])) {
                        // SEARCH FOR USERS
                        require "2-search.php";
                
                        
                        if (count($results) > 0) {
                            foreach ($results as $row) {
                                echo "<div class='col-lg-3 col-md-4 col-sm-6'>";
                                echo "<div class='product__item'>";
                                echo "<div class='product__item__pic set-bg'>";
                                echo "<img src='images/movie/" . $row['image'] . "'>";
                                echo "<div class='product-overlay'>";
                                echo "<div class='overlay-content'>";
                                echo "<h2>" . '$' . $row['price'] . "</h2>";
                                echo "<p>" . $row['description'] . "</p>";
            
            
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div class='product__item__text'>";
                                echo "<h6>";
                                echo "<a>" . $row['name'] . "</a>";
                                echo "</h6>";
                                echo "<div class='product__price'>" . '$' . $row['price'] . "</div>";
                                echo "<div class='product__price'>" . 'Phone:-' . $row['phoneno'] . "</div>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                            }
                          } else {
                            echo "No results found";

                   //If you need to redirect it to
                            
                          }
                    }
                    else{
                        $start_from = ($page - 1) * $per_page_record;
                        $statement = "items ORDER BY currenttime DESC";
                        $query = "SELECT * FROM items  ORDER BY currenttime DESC LIMIT $start_from, $per_page_record";
                        $rs_result = mysqli_query($con, $query);
                        while ($row = mysqli_fetch_array($rs_result)) {
                            echo "<div class='col-lg-3 col-md-4 col-sm-6'>";
                            echo "<div class='product__item'>";
                            echo "<div class='product__item__pic set-bg'>";
                            echo "<img src='images/movie/" . $row['image'] . "'>";
                            echo "<div class='product-overlay'>";
                            echo "<div class='overlay-content'>";
                            echo "<h2>" . '$' . $row['price'] . "</h2>";
                            echo "<p>" . $row['description'] . "</p>";
        
        
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "<div class='product__item__text'>";
                            echo "<h6>";
                            echo "<a>" . $row['name'] . "</a>";
                            echo "</h6>";
                            echo "<div class='product__price'>" . '$' . $row['price'] . "</div>";
                            echo "<div class='product__price'>" . 'Phone:-' . $row['phoneno'] . "</div>";
                            echo "</div>";
                            echo "</div>";
                            echo "</div>";
                        }
                    }
            
        



                ?>

            </div>
            <div class="col-lg-12 text-center">
                <div class="pagination__option">
                    <?php
                    if (!isset($_POST['searchitem'])) {
                    echo pagination($statement, $per_page_record, $page);
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->

    <!-- Banner Section Begin -->
    <section class="banner set-bg" data-setbg="img/banner/banner-1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-8 m-auto">
                    <div class="banner__slider owl-carousel">
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>Geez Gebeya</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>Geez Gebeya</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                        <div class="banner__item">
                            <div class="banner__text">
                                <span>The Chloe Collection</span>
                                <h1>Geez Gebeya</h1>
                                <a href="#">Shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Section End -->


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
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Orders Tracking</a></li>
                            <li><a href="#">Checkout</a></li>
                            <li><a href="#">Wishlist</a></li>
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
    <script src="js/jquery.scrollUp.min.js"></script>
</body>

</html>