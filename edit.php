
<?php
include("db.php");
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $query = "SELECT * FROM registro WHERE id = $id ";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido = $row['apellido'];
    $cedula = $row['cedula'];
    $telefono = $row['telefono'];
    $correo = $row['correo'];
  }
}

?>
<?php include('includes/header.php') ?>

<div class="container p-4">
  <div class="row">
    <div class="col-md-4 mx-auto">
      <div class="card card-body">
        <form action="update.php" method="POST">
        <div class="form-group">
                  <input type="hidden"  name="id"  id="id" value="<?php echo $id; ?>" class="needs_validation" placeholder=" " ><br>
               </div>
               <div class="form-group">
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre " value="<?php echo $nombre; ?>"><br>
               </div>
               <div class="form-group">

                  <input type="text" name="apellido" class="form-control" placeholder="Apellido" value="<?php echo $apellido; ?>"><br>
               </div>

               <div class="form-group">
                  <input type="text" name="cedula" class="form-control" placeholder="Cedula" value="<?php echo $cedula; ?>"><br>
               </div>

               <div class="form-group">
                  <input type="text" name="telefono" class="form-control" placeholder="Telefono" value="<?php echo $telefono;?>"><br>
               </div>

               <div class="form-group">
                  <input type="email" name="correo" class="form-control" placeholder="Correo" value="<?php echo $correo;?>" ><br>
               </div>
               <input type="hideen" name="update" id="update" class="form-control" placeholder="Correo" >
            <button  type="submit" class="btn btn-primary" name="save" value="save">
            Actualizar
          </button>
        </form>
      </div>
    </div>
  </div>


</div>