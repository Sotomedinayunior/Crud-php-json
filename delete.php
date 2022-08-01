<?php
include './partes/head.php';
require __DIR__ . './Data.php';


if (!isset($_POST['Vuelo'])) {
    echo "No localizado";
    exit;
}
$uservuelo = $_POST['Vuelo'];
deletedata($uservuelo);

header("Location: index.php");


