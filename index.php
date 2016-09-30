<?php
require_once "config/database.php";
session_start();

if(isset($_GET['logout']) == 1 && isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
require_once "templates/header.php";
if (!isset($_SESSION['user'])) {
    require_once "templates/login.php";
} else {
    require_once "templates/menu.php";
    $module = (isset($_GET['module'])) ? $_GET['module'] : "posts";
    $action = (isset($_GET['action'])) ? $_GET['action'] : "read";

    require_once "modules/$module/$action.inc.php";
}



?>

<?php
require_once "templates/footer.php";
?>



