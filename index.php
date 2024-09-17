<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$reponse = "Bienvenue sur l'API de conversion d'image en Base64";



if (!empty($_POST['pictureName'])){



    $reponse = $_POST['pictureName'];


}


















echo json_encode($reponse);
