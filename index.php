<?php

require_once 'app/init.php';

$listQuery = $db->prepare("
    SELECT id, title, done
    FROM todo");

$listQuery->execute() ? listQuery->rowCount()

$list = $listQuery->rowCount() ? $listQuery : [];

foreach($list as $lists) {
    echo $list['name], '<br>;
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>To do</title>
    </head>
    <body>
        <div class="list">
            <h1 class="header">To do.</h1>
            <?php if(!empty($list)): ?>
            <ul class="list">
            <?php if (!empty($items)): ?>
                <li><span class="item<?php echo $list['done'] ? ' done' : ' ' ?>"><?php echo $list['name']; ?></span><a href="#" class="done-button">Mark as done</a>
                <?php if(!item['done']): ?>
                <a href="mark.php?as=done<?php echo $item['id']; ?>" class="done-button">
                </li>
                <?php endforeach; ?>
            </ul>
            <?php else: ?>
                <p>List is empty!</p>
            <?php endif; ?>

            <form action="add.php" class="item-add" method = "post">
                <input type="text" name="name" placeholder="Type new to do item" class="input" required>
                <input type="submit" value="Add" class="submit">
            </form>
        </div>
    </body>
</html>