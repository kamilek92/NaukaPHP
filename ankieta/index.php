<?php
session_start();

require_once("ustawienia.php");



$meta = new MetaTags($_GET['page'], FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE, FALSE,FALSE, FALSE, FALSE, FALSE, FALSE, "", "","");

require_once("head.php");



Modul::load("nawigacja");


if(!(isset($_GET['page']))) {
    header("Location: ".SERVER_ADDRESS."start");
} else {
    $mp = new MainLoad($_GET['page']);
}


require_once("fooder.php");
?>
