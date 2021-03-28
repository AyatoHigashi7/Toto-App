<?php require_once('app/init.php');

$item = $_GET['item'];

$main = new Main();
$done = 1;

$main->mark_done($item, $done);


 header('location: index.php');