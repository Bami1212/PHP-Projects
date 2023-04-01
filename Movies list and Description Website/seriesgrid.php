<!DOCTYPE html>
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html lang="en" class="no-js">

<!-- moviegrid07:29-->

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
	<!--preloading-->
	<div id="preloader">
		<img class="logo" src="images/logo1.png" alt="" width="119" height="58">
		<div id="status">
			<span></span>
			<span></span>
		</div>
	</div>
	<!--end of preloading-->
	<!--login form popup-->

	<!--end of login form popup-->
	<!--signup form popup-->

	<!--end of signup form popup-->

	<!-- BEGIN | Header -->
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
					<a href="index.php"><img class="logo" src="images/logo1.png" alt="" width="119" height="58"></a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse flex-parent" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav flex-child-menu menu-left">
						<li class="hidden">
							<a href="#page-top"></a>
						</li>
						<li><a href="index.php">Home </a></li>
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
						<li><a href="games.php">Games</a></li>
						<li class="dropdown first">
							<a class="btn btn-default dropdown-toggle lv1" data-toggle="dropdown" data-hover="dropdown">
								Contact Us <i class="fa fa-angle-down" aria-hidden="true"></i>
							</a>
							<ul class="dropdown-menu level1">
								<li><a href="https://t.me/geezmovie">Join Channel</a></li>
								<li><a href="#">Location</a></li>
							</ul>
						</li>
					</ul>

				</div>
				<!-- /.navbar-collapse -->
			</nav>
            <div class="top-search">
		<form autocomplete="off" method="post" action="seriesgrid.php">
      <input type="text" name="searchseries" placeholder="Search for Series Movie by Title" required/>
      <input type="submit" value="search"/>
    </form>
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
						<h1> Series movie listing - grid</h1>
						<ul class="breadcumb">
							<li class="active"><a href="index.php">Home</a></li>
							<li> <span class="ion-ios-arrow-right"></span> Series movie listing</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="page-single">
		<div class="container">
			<div class="row ipad-width">
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="topbar-filter">
                    <?php 
                                     $con = mysqli_connect("localhost","root","","geezmovie");
                                     $sql = "SELECT * FROM series_movies";
                                     $result = mysqli_query($con, $sql);
                                     $row = mysqli_num_rows($result);
                                     echo "<p>".'Found: ';
                                        echo "<span>".$row.' Movies'."</span>";
                                     echo "</p>";
										?>
										
										<a href="seriesgrid.php" class="active">See All</a>
						<a href="seriesgrid.php" class="grid"><i class="ion-grid active"></i></a>
					</div>
					<div class="flex-wrap-movielist">
						<div class="content" id="jar" style="display:none">
                            <?php 

                        if (isset($_POST['searchseries'])) {
    // SEARCH FOR USERS
                                    require "2-search.php";
    // DISPLAY RESULTS
                             if (count($results) > 0) {
                               foreach ($results as $r) {
                                echo "<div class='movie-item-style-2 movie-item-style-1'>";
                                echo "<img src='images/uploads/".$r['image']."'>";
                                echo "<div class='hvr-inner'>";
                                   echo "<a>".$r['description']."</a>";
                                echo "</div>";
                                echo "<div class='mv-item-infor'>";
                                   echo "<h6>";
                                   echo "<a>".$r['title']."</a>";
                                   echo "</h6>";
                                   echo "<p class='rate'>";
                                   echo "<i class='ion-android-star'>";
                                   echo "</i>";
                                   echo "<span>".$r['rating'].'/10'."</span>";
                                    echo "</p>";
                                echo "</div>";

                            echo "</div>";
                                              }
                                             } else {
                                        echo "No results found";

      
                                                 }
                                                    }

                                    else{
                                        $con = mysqli_connect("localhost","root","","geezmovie");
                                        $query = "SELECT * FROM series_movies ";     
                                        $rs_result = mysqli_query ($con, $query); 
   
   
                                       //  $sql = "SELECT *FROM series_movies LIMIT " . $page_first_result . ',' . $results_per_page;
                                       //  $res = mysqli_query($con, $sql);
                                       while($row = mysqli_fetch_array($rs_result)){
                                             echo "<div class='movie-item-style-2 movie-item-style-1'>";
                                                echo "<img src='images/uploads/".$row['image']."'>";
                                                echo "<div class='hvr-inner'>";
                                                   echo "<a>".$row['description']."</a>";
                                                echo "</div>";
                                                echo "<div class='mv-item-infor'>";
                                                   echo "<h6>";
                                                   echo "<a>".$row['title']."</a>";
                                                   echo "</h6>";
                                                   echo "<p class='rate'>";
                                                   echo "<i class='ion-android-star'>";
                                                   echo "</i>";
                                                   echo "<span>".$row['rating'].'/10'."</span>";
                                                    echo "</p>";
                                                echo "</div>";
   
                                            echo "</div>";
                                           }
                                    }



									
                                        ?>
						</div>
					</div>
					<div class="topbar-filter">
					<label>Movies per page: </label>
					<select id="choosemovienum">
						<option value="10" selected="selected">10 Movies</option>
						<option value="20">20 Movies</option>
					</select>
					
						<div class="pagination">
						<span>Page :</span>
						
								
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="sidebar">
						<div class="ads">
							<img src="" alt="">
						</div>
						<div class="sb-facebook sb-it">
							<h4 class="sb-title">Find us on Telegram</h4>
							<a href="https://t.me/geezmovie"><img class="logo" src="images/telegram.png"
									alt=""></a>
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
					<a href="index.php"><img class="logo" src="images/logo1.png" alt=""></a>
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
	<script src="js/backnext.js"></script>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

<!-- moviegrid07:38-->

</html>