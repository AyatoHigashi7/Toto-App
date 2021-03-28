<?php require_once('app/init.php'); 

    $main = new Main();
    $items = $main->show_todo();

    if(isset($_POST['remove'])) {
        // $remove = $main->delete($item['name']);
        echo "works";
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To Do List</title>
</head>

<!-- Google fonts -->

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Shadows+Into+Light+Two&display=swap" rel="stylesheet">

<!-- Custom CSS -->
<link rel="stylesheet" href="css/style.css">

<body>


<div class="list">

        <h1 class="header">To do.</h1>

        <ul class="items">
            <?php foreach($items as $item): ?>
            <li>

                <span class="item<?php echo $item['done'] ? ' done' : '' ?>"> <?php echo $item['name']; ?></span>

                    <a href="mark.php?item=<?php echo $item['id'] ?>" class="done-button">Mark as done</a>
                    <a href="unmark.php?item=<?php echo $item['id'] ?>" class="done-button">Unmark as done</a>
                    <a href="remove.php?item=<?php echo $item['id'] ?>" class="done-button remove">remove</a>

            </li>
            <?php endforeach; ?>


        </ul>

        <form class="item-add" action="add.php" method="post">
            <label for="title">Type a new item here</label>
            <input type="text" name="name" class="input" autocomplete="off" required>
            <input type="submit" value="Add" class="submit">
        </form>

</div>


</body>
</html>