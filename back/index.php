
<?php
    header("Access-Control-Allow-Origin: *");
    header("Access-Control-Allow-Headers: X-Requested-With");
    header('Content-Type: application/json');

    $jsonTasks = file_get_contents("tasks.json"); 
    echo $jsonTasks;

    
    //PRIMA DI TASKS.JSON
    // $todos = [
    //     [
    //         'name' => 'Imparare HTML',
    //         'done' => true,
    //     ],
    //     [
    //         'name' => 'Imparare CSS',
    //         'done' => true,
    //     ],
    //     [
    //         'name' => 'Imparare JS',
    //         'done' => true,
    //     ],
    //     [
    //         'name' => 'Imparare php',
    //         'done' => false,
    //     ],
    // ];

?>



