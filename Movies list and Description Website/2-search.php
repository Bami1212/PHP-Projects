<?php
// (1) DATABASE CONFIG
// ! CHANGE THESE TO YOUR OWN !
define('DB_HOST', 'localhost');
define('DB_NAME', 'geezmovie');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'root');
define('DB_PASSWORD', '');

// (2) CONNECT TO DATABASE
try {
  $pdo = new PDO(
    "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
    DB_USER, DB_PASSWORD, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false ]
  );
} catch (Exception $ex) {
  die($ex->getMessage());
}
if (isset($_POST['search'])) {
// (3) SEARCH
$stmt = $pdo->prepare("SELECT * FROM `games` WHERE `title` LIKE ? OR `Year` LIKE ?");
$stmt->execute(["%" . $_POST['search'] . "%", "%" . $_POST['search'] . "%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }
}

if (isset($_POST['searchseries'])) {
  // (3) SEARCH
  $stmt = $pdo->prepare("SELECT * FROM `series_movies` WHERE `title` LIKE ? ");
  $stmt->execute(["%" . $_POST['searchseries'] . "%"]);
  $results = $stmt->fetchAll();
  if (isset($_POST['ajax'])) { echo json_encode($results); }
  }

  if (isset($_POST['searchmovie'])) {
    // (3) SEARCH
    $stmt = $pdo->prepare("SELECT * FROM `movies` WHERE `title` LIKE ? OR `year` LIKE ?");
$stmt->execute(["%" . $_POST['searchmovie'] . "%", "%" . $_POST['searchmovie'] . "%"]);
    $results = $stmt->fetchAll();
    if (isset($_POST['ajax'])) { echo json_encode($results); }
    }



    
  ?>