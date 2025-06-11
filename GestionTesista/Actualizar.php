<?php
require_once "../Conexion.php";

$id=$_POST["id"];
$apellido = $_POST["apellido"];
$nombre = $_POST["nombre"];
$dni = $_POST["dni"];
$EP= $_POST["Escuela_Profecional"];
$sql = "UPDATE tesista SET 
            Apellido = '$apellido', 
            Nombre = '$nombre', 
            DNI = '$dni', 
            Escuela_Profeciona = '$EP', 
        WHERE id = $id";

$objConexion = new Conexion();
$con = $objConexion->getConexion();

if ($con->query($sql) === true) {
    echo "si se pudo";
    header("Location: ../GestionTesista.php");
} else {
    echo "Error al actualizar: " . $con->error;
    echo "no se pudo actualizar los datos";
    header("Location: ./editar?id=$id.php");

}
