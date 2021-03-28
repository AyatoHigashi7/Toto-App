<?php require_once('app/init.php');

if(isset($_POST['name'])) {

    $name = trim($_POST['name']);
    $done = 0;

    if(!empty($name)) {
        $main = new Main();
        $main->create($name, $done);

        header('location: index.php');
    };
}