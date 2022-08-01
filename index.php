<?php
require('Data.php');
$users = GetUsers();

include './partes/head.php';
?>

<p>
        <a class="btn btn-success" href="create.php">Crear nuevo Vuelo</a>
    </p>
<table class="table  table-custom">
      <thead>
        <tr>
          <th>Vuelo</th>
          <th>Origen</th>
          <th>Destino</th>
          <th>Salida</th>
          <th>Llegada</th>
          <th>Domingo</th>
          <th>Lunes</th>
          <th>Martes</th>
          <th>Miercoles</th>
          <th>Jueves</th>
          <th>Viernes</th>
          <th>Sábado</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo $user['Vuelo'] ?></td>
                <td><?php echo $user['origen'] ?></td>
                <td><?php echo $user['destino'] ?></td>
                <td><?php echo $user['salida'] ?></td>
                <td><?php echo $user['llegada'] ?></td>
                <td><?php echo $user['domingo'] ?></td>
                <td><?php echo $user['lunes'] ?></td>
                <td><?php echo $user['martes'] ?></td>
                <td><?php echo $user['miercoles'] ?></td>
                <td><?php echo $user['jueves'] ?></td>
                <td><?php echo $user['viernes'] ?></td>
                <td><?php echo $user['sabado'] ?></td>
                
                <td>
                    <a href="view.php?Vuelo=<?php echo $user['Vuelo'] ?>" class="btn btn-sm btn-outline-info">View</a>
                    <a href="update.php?Vuelo=<?php echo $user['Vuelo'] ?>"
                       class="btn btn-sm btn-outline-secondary">Update</a>
                   
                    <form method="POST" action="delete.php">
                        <input type="hidden" name="Vuelo" value="<?php echo $user['Vuelo'] ?>">
                        <button class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach;; ?>
        </tbody>
    </table>
<?php
include './partes/footer.php'


?>
    