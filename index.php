<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$status = "true";
$why = "No request";
$reponse = "Bienvenue sur l'API de conversion d'image en Base64";


if (!empty($_GET['pictureName'])){

    $reponse = $_GET['pictureName'];

    if (file_exists($_GET['pictureName'])) {
        $image = file_get_contents($_GET['pictureName']);


        $status = "true";
        $why = "Image good";
        $reponse = base64_encode($image);

    } else {
        $status = "err";
        $why = "Image not found";
        $reponse = "";
    }

}

echo json_encode([
    "status"=> $status,
    "why"=> $why,
    "data" => $reponse
]);
