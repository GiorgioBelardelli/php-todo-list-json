
  <?php
    header("Access-Control-Allow-Origin: *");

$todos = [
    [
        'name' => 'Imparare HTML',
        'done' => true,
    ],
    [
        'name' => 'Imparare CSS',
        'done' => true,
    ],
    [
        'name' => 'Imparare JS',
        'done' => true,
    ],
    [
        'name' => 'Imparare php',
        'done' => false,
    ],
];

    header('Content-Type: application/json');
    echo json_encode($todos);
?>

