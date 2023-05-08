<?php
$string = file_get_contents("dischi.json");

$items_array = json_decode($string, true);

$response = [
    "results" => $items_array,
    "success" => true
];

header('Content-Type: application/json');
echo json_encode($response);
