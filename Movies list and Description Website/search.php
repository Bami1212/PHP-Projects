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
    <!-- Basic need -->
    <title>Geez Movie Center</title>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <link rel="profile" href="#">

    <!--Google Font-->
    <link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Dosis:400,700,500|Nunito:300,400,600' />
    <!-- Mobile specific meta -->
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone-no">

    <!-- CSS files -->
    <link rel="stylesheet" href="css/plugins.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <header class="ht-header">
        <div class="container">
            <nav class="navbar navbar-default navbar-custom">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header logo">
                    <div class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <div id="nav-icon1">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <a href="index-2.html"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav flex-child-menu menu-left">
                        <li class="hidden">
                            <a href="#page-top"></a>
                        </li>
                        <li><a href="home.html">Home </a></li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                movies<i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="movie.php">Movie list</a></li>
                                <li><a href="seriesgrid.php">Series List</a></li>
                                <li class="it-last"><a href="amharic.php">Amharic Movie</a></li>
                            </ul>
                        </li>
                        <li><a href="game.php">Games</a></li>
                        <li class="dropdown first">
                            <a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
                                Contact Us <i class="fa fa-angle-down" aria-hidden="true"></i>
                            </a>
                            <ul class="dropdown-menu level1">
                                <li><a href="https://t.me/geezmovie">Join Channel</a></li>
                                <li><a href="userfavoritelist.html">Location</a></li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </nav>


            <div class="top-search">

                <input type="text" name="search_text" id="search_text"
                    placeholder="Search for Game, TV Show or celebrity that you are looking for" class="form-control" />

            </div>
            <!-- top search form -->

        </div>
    </header>
    <!-- END | Header -->

    <div class="hero common-hero">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="hero-ct">
                        <h1> movie listing - list</h1>
                        <ul class="breadcumb">
                            <li class="active"><a href="#">Home</a></li>
                            <li> <span class="ion-ios-arrow-right"></span> movie listing</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-single movie_list">
        <div class="container">
            <div class="row ipad-width2">
                <div class="col-md-8 col-sm-12 col-xs-12">
                    <div class="topbar-filter">
                        <?php 
                                     $con = mysqli_connect("localhost","root","","geezmovie");
                                     $sql = "SELECT * FROM games";
                                     $result = mysqli_query($con, $sql);
                                     $row = mysqli_num_rows($result);
                                     echo "<p>".'Found: ';
                                        echo "<span>".$row.' Games'."</span>";
                                     echo "</p>";
                                        ?>
                        <a href="games.php" class="list"><i class="ion-ios-list-outline active"></i></a>
                    </div>
                    <div class="content" id="jar" style="display:none">
                        <?php 
									 
									 

                                    //  $sql = "SELECT *FROM series_movies LIMIT " . $page_first_result . ',' . $results_per_page;
                                    //  $res = mysqli_query($con, $sql);
                                    
                                        $con = mysqli_connect("localhost","root","","geezmovie");
									 $query = "SELECT * FROM games ";     
									 $rs_result = mysqli_query ($con, $query); 
                                        while($row = mysqli_fetch_array($rs_result)){
                                            echo "<div class='movie-item-style-2'>";
                                               echo "<img src='images/game/".$row['image']."'>";
                                               echo "<div class='mv-item-infor'>";
                                                  echo "<h6>";
                                                  echo "<a>".$row['title'];
                                                  echo "<span>".'('.$row['Year'].')'."</span>";
                                                  echo "</a>";
                                                  echo "</h6>";
                                                   echo "<p class='describe'>".$row['description']."</p>";
                                                   echo "<p>".'Minimum Requirements: ';
                                                   echo "<a>".$row['Minimum_requirements']."</a>";
                                                   echo "</p>";
                                               echo "</div>";
  
                                           echo "</div>";
                                          }
                                         
                                    
                                        ?>
                    </div>



                    <div class="topbar-filter">
                        <label>Games per page: </label>
                        <select id="choosemovienum">
                            <option value="5" selected="selected">5 Games</option>
                            <option value="10">10 Games</option>
                        </select>

                        <div class="pagination">
                            <span>Page :</span>


                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="searh-form">
                            <h4 class="sb-title">Search for movie</h4>
                            <form class="form-style-1" action="#">
                                <div class="row">
                                    <div class="col-md-12 form-it">
                                        <label>Movie name</label>
                                        <input type="text" placeholder="Enter keywords">
                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Genres & Subgenres</label>
                                        <div class="group-ip">
                                            <select name="skills" multiple="" class="ui fluid dropdown">
                                                <option value="">Enter to filter genres</option>
                                                <option value="Action1">Action 1</option>
                                                <option value="Action2">Action 2</option>
                                                <option value="Action3">Action 3</option>
                                                <option value="Action4">Action 4</option>
                                                <option value="Action5">Action 5</option>
                                            </select>
                                        </div>

                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Rating Range</label>

                                        <select>
                                            <option value="range">-- Select the rating range below --</option>
                                            <option value="saab">-- Select the rating range below --</option>
                                            <option value="saab">-- Select the rating range below --</option>
                                            <option value="saab">-- Select the rating range below --</option>
                                        </select>

                                    </div>
                                    <div class="col-md-12 form-it">
                                        <label>Release Year</label>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <select>
                                                    <option value="range">From</option>
                                                    <option value="number">10</option>
                                                    <option value="number">20</option>
                                                    <option value="number">30</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <select>
                                                    <option value="range">To</option>
                                                    <option value="number">20</option>
                                                    <option value="number">30</option>
                                                    <option value="number">40</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <input class="submit" type="submit" value="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="ads">
                            <img src="" alt="">
                        </div>
                        <div class="sb-facebook sb-it">
                            <h4 class="sb-title">Find us on Telegram</h4>
                            <a href="https://t.me/geezmovie"><img class="logo" src="images/telegram.png" alt=""></a>
                            <div class="joinus">
                                <a href="https://t.me/geezmovie">JOIN US</a>
                            </div>

                        </div>
                        <div class="sb-youtube sb-it">
                            <h4 class="sb-title">Youtube</h4>
                            <a href="https://bit.ly/37aOmuu""><img class=" logo" src="images/yt.png" alt=""></a>

                            <div class="subscribe">
                                <a href="https://bit.ly/37aOmuu">SUBSCRIBE</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer section-->
    <footer class="ht-footer">
        <div class="container">
            <div class="flex-parent-ft">
                <div class="flex-child-ft item1">
                    <a href="index-2.html"><img class="logo" src="images/logo1.png" alt=""></a>
                    <p>Addis Ababa, Ethiopia<br>
                        Bethel</p>
                    <p>Call us: <a href="#">+251 941256896</a></p>
                </div>
                <div class="flex-child-ft item2">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="flex-child-ft item4">
                    <h4>Account</h4>
                    <ul>
                        <li><a href="https://t.me/geezmovie">Telegram</a></li>
                        <li><a href="https://bit.ly/37aOmuu">Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="ft-copyright">
            <div class="ft-left">
                <p><a target="_blank">Geez Movie Center</a></p>
            </div>
            <div class="backtotop">
                <p><a href="#" id="back-to-top">Back to top <i class="ion-ios-arrow-thin-up"></i></a></p>
            </div>
        </div>
    </footer>
    <!-- end of footer section-->

    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/plugins2.js"></script>
    <script src="js/custom.js"></script>
    <script src="js/movie.js"></script>
</body>

<!-- movielist07:38-->

</html>
<script>
$(document).ready(function() {
    var bota = $('.content').html();

    function load_data(query) {
        $.ajax({
            url: "fetch.php",
            method: "post",
            data: {
                query: query
            },
            success: function(data) {
                $('.content').html(data);
            }
        });
    }

    $('#search_text').keyup(function() {
        var search = $(this).val();
        if (search != '') {
            load_data(search);
        } else {
            load_data();

        }
    });
});
</script>