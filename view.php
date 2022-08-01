<?php 
include './partes/head.php';
require __DIR__.'./Data.php';
if(!isset($_GET['Vuelo'])){
    echo "Not Found";
    exit;
}



$uservuelo=$_GET['Vuelo'];



$user = getUserById($uservuelo);
if(!$user){
    echo "Not Found";
    exit;
}
?>
<div class="container">
    <div class="card">
        <div class="card-header">
            <h3>Vuelo: <b><?php echo $user['Vuelo'] ?></b></h3>
        </div>
        </div>



 <table class="table">
            <tbody>
            <tr>
                <th>Vuelo:</th>
                <td><?php echo $user['Vuelo'] ?></td>
            </tr>
            <tr>
                <th>Origen:</th>
                <td><?php echo $user['origen'] ?></td>
            </tr>
            <tr>
                <th>Destino:</th>
                <td><?php echo $user['destino'] ?></td>
            </tr>
            <tr>
                <th>salida:</th>
                <td><?php echo $user['salida'] ?></td>
            
            </tr>
           
            <tr>
                <th>LLegada:</th>
                <td><?php echo $user['llegada'] ?></td>
            </tr>
            <tr>
                <th>Domingo:</th>
                <td><?php echo $user['domingo'] ?></td>
            </tr>
            <tr>
                <th>Lunes:</th>
                <td><?php echo $user['lunes'] ?></td>
            </tr>
            <tr>
                <th>Martes:</th>
                <td><?php echo $user['martes'] ?></td>
            </tr>
           
            <tr>
                <th>Miercoles:</th>
                <td><?php echo $user['miercoles'] ?></td>
            </tr>
            <tr>
                <th>Jueves:</th>
                <td><?php echo $user['jueves'] ?></td>
            </tr>
            <tr>
                <th>Viernes:</th>
                <td><?php echo $user['viernes'] ?></td>
            </tr>
            <tr>
                <th>Sabado:</th>
                <td><?php echo $user['sabado'] ?></td>
            </tr> 

            <?php
include './partes/footer.php'


?>