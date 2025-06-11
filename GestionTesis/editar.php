<?php
if (!isset($_GET["id"])) {
   header("Location: ../GestionTesista.php");
    exit();
}

require_once "../Conexion.php";
$id = $_GET["id"];

$objConexion = new Conexion();
$con = $objConexion->getConexion();

$sql = "SELECT * FROM tesis WHERE id = $id";
$resultado = $con->query($sql);

if ($resultado->num_rows == 0) {
    echo "Persona no encontrada.";
    echo "Error al actualizar: " . $con->error;
    //exit();
}




$fila = $resultado->fetch_assoc();