<?php  include("db.php");

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $query= "SELECT * FROM registro WHERE id= $id";
    $result =mysqli_query ($conn,$query);
    if(mysqli_num_rows($result)==1){
        $row=mysqli_fetch_array($result);
    $nombre =$row ['nombre'];
    $apellido =$row['apellido'];
    $cedula =$row['cedula'];
    $telefono =$row['telefono'];
    $correo =$row['correo'];

    }
}
if (isset($_POST['update'])) {
   $id = $_GET['id'];
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $cedula = $_POST['cedula'];
   $telefono = $_POST['telefono'];
   $correo = $_POST['correo'];
 
   $query = "UPDATE registro set nombre = '$nombre', apellido ='$apellido' WHERE id=$id";
   mysqli_query($conn, $query);
   header("location: index.php");
 }


?>
<?php include("includes/header.php") ?>


<div class="form row">
            <form action="edit.php" method="POST">
               <div class="form-group">
                  <input type="hidden" name="id" disabled id="id" value="<?php echo $id; ?>" class="needs_validation" placeholder=" " ><br>
               </div>
               <div class="form-group">
                  <input type="text" name="nombre" class="form-control" placeholder="Nombre " ><br>
               </div>
               <div class="form-group">

                  <input type="text" name="apellido" class="form-control" placeholder="Apellido" ><br>
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
               <input type="submit" class="btn btn-primary" name="save" value="save" >
            </form>


<?php include("includes/footer.php") ?>