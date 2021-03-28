<?php require_once('app/init.php');

$item = $_GET['item'];

$main = new Main();

$main->delete($item);


 header('location: index.php');