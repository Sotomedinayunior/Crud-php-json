<div class="container">
    <div class="card">
       <div class="card-header">
        <h3><?php if($user['Vuelo']):?>
        Actualizar vuelo:<b><?php echo $user['Vuelo'] ?></b>
       <?php else: ?> 
         Crear un nuevo Vuelo
        <?php endif ?>
        </h3>
    </div>
       <div class="card-body">
<form method="POST" enctype="multipart/form-data" action="">
            <div class="form-group">
                <label>Vuelo</label>
                <input name="Vuelo" value="<?php echo $user['Vuelo'] ?>" class="form-control">

            </div>
            <div class="form-group">
                <label>Origen</label>
                <input name="origen" value="<?php echo $user['origen'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Destino</label>
                <input name="destino" value="<?php echo $user['destino'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Salida</label>
                <input name="salida" value="<?php echo $user['salida'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Llegada</label>
                <input name="llegada" value="<?php echo $user['llegada'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Domingo</label>
                <input name="domingo" value="<?php echo $user['domingo'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Lunes</label>
                <input name="lunes" value="<?php echo $user['lunes'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Martes</label>
                <input name="martes" value="<?php echo $user['martes'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>miercoles</label>
                <input name="miercoles" value="<?php echo $user['miercoles'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Jueves</label>
                <input name="jueves" value="<?php echo $user['jueves'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>Viernes</label>
                <input name="viernes" value="<?php echo $user['viernes'] ?>" class="form-control">
            </div>
            <div class="form-group">
                <label>sabado</label>
                <input name="sabado" value="<?php echo $user['sabado'] ?>" class="form-control">
            </div>


            <button class="btn btn-success">Submit</button>
        </form>
    </div>
    </div>
</div>