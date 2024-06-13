<?php

$students = [
    [
        'name' => 'Mario',
        'last_name' => 'Rossi'
    ],
    [
        'name' => 'Giovanna',
        'last_name' => 'Bianchi'
    ],
    [
        'name' => 'Giuseppe',
        'last_name' => 'Verdi'
    ],
];

header('Content-Type: application/json');

$jsonString = json_encode($students);

echo $jsonString;