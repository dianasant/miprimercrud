<?php

include ("db.php"); 
//var_dump($_POST);
/*Si existe al través del metodo Post un valor llamado */
if (isset($_POST['update'])) {
   $id = $_POST['id'];
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $cedula = $_POST['cedula'];
   $telefono = $_POST['telefono'];
   $correo = $_POST['correo'];
 
   $query = "UPDATE registro set nombre = '$nombre', apellido ='$apellido', cedula='$cedula', telefono='$telefono', correo ='$correo' WHERE id=$id";
   //echo "<p>".$query;
   //mysqli_query($conn, $query);
   $result = mysqli_query($conn,$query);
   if (!$result) {
      die("Query Failed");
   }
   header("location: index.php");
 }
 
/*Redireccionar
header("location:index.php");*/
?>
