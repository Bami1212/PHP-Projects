<?php
// (1) DATABASE CONFIG
// ! CHANGE THESE TO YOUR OWN !
define('DB_HOST', 'localhost');
define('DB_NAME', 'geezgebeya');
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
if (isset($_POST['searchitem'])) {
// (3) SEARCH
$stmt = $pdo->prepare("SELECT * FROM `items` WHERE `name` LIKE ? OR `price` LIKE ? OR `itemtype` LIKE ?");
$stmt->execute(["%" . $_POST['searchitem'] . "%", "%" . $_POST['searchitem'] . "%", "%" . $_POST['searchitem'] . "%"]);
$results = $stmt->fetchAll();
if (isset($_POST['ajax'])) { echo json_encode($results); }
}



    
  ?>