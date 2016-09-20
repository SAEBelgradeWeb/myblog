<?php
require_once "config/database.php";
require_once "templates/header.php";

$module = (isset($_GET['module'])) ? $_GET['module'] : "posts";
$action = (isset($_GET['action'])) ? $_GET['action'] : "read";

require_once "modules/$module/$action.inc.php";

?>

<?php
require_once "templates/footer.php";
?>



