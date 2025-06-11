<?php

print_r($_POST);
require_once "../Conexion.php";


$apellido = $_POST["apellido"];
$nombre = $_POST["nombre"];
$dni = $_POST["dni"];
$EP= $_POST["Escuela_Profecional"];

$sql = "INSERT INTO tesista (Apellido, Nombre, DNI, Escuela_Profecional) VALUES ('$apellido','$nombre', '$dni', '$EP')";

$objConexion = new Conexion();
$con=$objConexion->getConexion();
$con->query($sql);
if($con->query($sql) === true){
    $ultimo_id=$con->insert_id;
    echo "si se pudo";
    header("Location: ../GestionTesista.php");
}else{
    echo "no se pudo ingresar los datos";
    //header("Location: ./formulario.php?success=true");
}