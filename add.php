<?php

require_once 'app/init.php';

if(isset($_POST['name'])) {
    $name = trim($_POST['name']);

    if(!empty($name)) {
        $addedQuery = $db->prepare("
            INSERT INTO todo (id, name, done)
            VALUES (:id, :name, 0) ");

        $addedQuery->execute([
            'name' => $name,
            ]);
    }
}

header('Location: index.php');