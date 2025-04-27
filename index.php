<?php
error_reporting(~E_NOTICE);
$c = isset($_GET["c"]) ? $_GET["c"] : "Peminjaman";
$m = isset($_GET["m"]) ? $_GET["m"] : "index";

include_once "controllers/Controller.class.php";
include_once "controllers/$c.class.php";

$controller = new $c;
$controller->$m();
?>
