<?php
include './partes/head.php';
require __DIR__ . './Data.php';



// $uservuelo = $_GET['Vuelo'];
$user = [
   
        'Vuelo' => "",
        'origen' => "",
        'destino' => "",
        'salida' => "",
        'llegada' => "",
        'domingo' => "",
        'lunes' => "",
        'martes' => "",
        'miercoles' => "",
        'jueves' => "",
        'viernes' => "",
        'sabado' => ""
        
];
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user =createdata($_POST);
    
    header("location:index.php");
}


?>

<?php include('./form.php')?>