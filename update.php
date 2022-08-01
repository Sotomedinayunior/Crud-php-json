<?php
include './partes/head.php';
require __DIR__ . './Data.php';
if (!isset($_GET['Vuelo'])) {
    echo "Not Found";
    exit;
}



$uservuelo = $_GET['Vuelo'];



$user = getUserById($uservuelo);
if (!$user) {
    echo "Not Found";
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user =updatedata($_POST , $uservuelo);
    header("Location:index.php");
}
?>
<div class="container">
    <div class="card">
       <div class="card-header">
        <h3>Actualizar vuelo:<b><?php echo $user['Vuelo'] ?></b></h3>
       </div>
       <div class="card-body">
        <?php include './form.php' ?>

        
       </div>
    </div>
</div>
<!-- 
// $errors = [
//     'Vuelo' => "",
//     'origen' => "",
//     'destino' => "",
//     'salida' => "",
//     'llegada' => "",
//     'domingo' => "",
//     'lunes' => "",
//     'martes' => "",
//     'miercoles' => "",
//     'jueves' => "",
//     'viernes' => "",
// ];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $user = array_merge($user, $_POST);

//     $isValid = validateUser($user, $errors);

//     if ($isValid) {
//         $user = updateUser($_POST, $uservuelo);
//         uploadImage($_FILES['picture'], $user);
//         header("Location: index.php");
//     }
// }

//  -->