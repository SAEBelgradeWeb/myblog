<?php
require_once "config/database.php";
require_once "templates/header.php";

$module = $_GET['module']; //posts
$action = $_GET['action']; //create

require_once "modules/$module/$action.inc.php";
?>

<?php
require_once "templates/footer.php";
?>



