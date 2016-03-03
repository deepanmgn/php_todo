<?php

require_once 'app/init.php'

if(isset($_GET['as'], $_GET['list'])) {
    $as = $_GET['as'];
    $list = $_GET['list'];

    switch($as) {
        case 'done';
            $doneQuery = $db->prepare("
                UPDATE todo
                SET done = 1
                WHERE id = :item
                ");

$doneQuery->execute([
    'item' => $item,
    ]);
        break;

    }
}

header('Location: index.php');