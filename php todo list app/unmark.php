<?php require_once('app/init.php');

$item = $_GET['item'];

$main = new Main();
$done = 0;

$main->mark_done($item, $done);


 header('location: index.php');