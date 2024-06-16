<?php

//leggo il file json dal disco
$fileContent = file_get_contents("dati.json");

//controllo se nei miei input ci sono dei dati
if ( isset($_POST["name"]) && isset ($_POST["last_name"])) {

    //converto il file json in un array php
    $students = json_decode($fileContent, true);

    //creo l'oggetto contenente un nuovo studente 
    $newStudent = [
        "name" => $_POST["name"],
        "last_name" => $_POST["last_name"]
    ];

    //pusho il mio nuovo file nell'array
    $students[] = $newStudent;

    //riconverto l'array in una stringa json
    $fileContent = json_encode($students);

    //scrivo l'array sul disco dati 
    file_put_contents("dati.json", $fileContent);


} else {
    //nulla
}

//setto l'header 
header('Content-type: application/json');

//restituisco il nuovo json con il nuovo contenuto
echo $fileContent;