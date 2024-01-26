<?php
    header("Access-Control-Allow-Origin: http://localhost:5173");
    // header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header('Content-Type: application/json');

    $jsonTasks = file_get_contents("tasks.json");
    $tasks = json_decode($jsonTasks, true);

    $text = $_POST['text'];
    $newTask = [
        'name' => $text,
        'done' => false,
    ];

    $tasks[] = $newTask;
    $jsonTasks = json_encode($tasks);

    file_put_contents("tasks.json", $jsonTasks);
    echo $jsonTasks;
?>