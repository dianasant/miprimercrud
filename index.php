<?php include("db.php") ?>

<?php include("includes/header.php") ?>

<!--Formulario y Tabla-->

<div class="container p-4">
   <div class="row">
      <div class="col-md-4 mx-auto">

         <div class="card card body">
            <form action="save.php" method="POST">
               <div class="form-group">
                  <input type="text" name="id" class="needs_validation" placeholder=" "><br>
               </div>
               <div class="form-group">
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre " autofocus><br>
               </div>
               <div class="form-group">

                  <input type="text" name="apellido" class="form-control" placeholder="Apellido"><br>
               </div>

               <div class="form-group">
                  <input type="text" name="cedula" class="form-control" placeholder="Cédula"><br>
               </div>

               <div class="form-group">
                  <input type="text" name="telefono" class="form-control" placeholder="Teléfono"><br>
               </div>

               <div class="form-group">
                  <input type="email" name="correo" class="form-control" placeholder="Correo" ><br>
               </div>
               <input type="submit" class="btn btn-primary" name="save" value="Guardar" >
            </form>
         </div>
      </div>
      <div class="col-md-8">
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>id</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Cédula</th>
                  <th>Télefono</th>
                  <th>Correo</th>
                  <th>Acciones</th>

               </tr>

            </thead>
            <tbody>
               <?php

               $query = "SELECT * FROM registro";
               $result_registros = mysqli_query($conn, $query);
               
               while ($row = mysqli_fetch_array($result_registros)) { ?>
                  <tr>
                     <td><?php echo $row['id'] ?></td>
                     <td><?php echo $row['nombre'] ?></td>
                     <td><?php echo $row['apellido'] ?></td>
                     <td><?php echo $row['cedula'] ?></td>
                     <td><?php echo $row['telefono'] ?></td>
                     <td><?php echo $row['correo'] ?></td>
                     <td>
                        <a href="edit.php?id=<?php echo $row['id']?>" >
                         <i class="far fa-edit"></i>
                        </a>
                        <a href="delete.php?id=<?php echo $row['id']?>" >
                         <i class="fas fa-eraser"></i>
                        </a>
                        
                     </td>
                  </tr>


               <?php } ?>
            </tbody>

         </table>

      </div>
   </div>


</div>
</div>





<?php include("includes/footer.php") ?>