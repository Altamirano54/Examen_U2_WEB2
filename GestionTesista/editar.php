<?php
if (!isset($_GET["id"])) {
   header("Location: ../GestionTesista.php");
    exit();
}

require_once "../Conexion.php";
$id = $_GET["id"];

$objConexion = new Conexion();
$con = $objConexion->getConexion();

$sql = "SELECT * FROM tesita WHERE id = $id";
$resultado = $con->query($sql);

if ($resultado->num_rows == 0) {
    echo "Persona no encontrada.";
    exit();
}




$fila = $resultado->fetch_assoc();
$EP=["Ing. Sistemas", "Ing. Mecanica Electrica", "Ing. Mecatronica"];
$EPdelTesista;
$EP1="";
$EP2="";
for ($i=0; $i < 3; $i++) { 
    if($EP[$i]==$fila['Escuela_Profecional']){
        $EPdelTesista=$fila['Escuela_Profecional'];
    }else{
        if($EP1==""){
            $EP1=$EP[$i];
        }
        if($EP2=="" && $EP1!=""){
            $EP2=$EP[$i];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Tesita</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Editar Testa</h1>
    
    <form action="procesa_insert.php" method="POST"> <br>
    <input type="hidden" name="id" value="<?= $fila['id'] ?>">
    <input name="apellido" value="<?= $fila['apellidos'] ?>" placeholder="Apellido"><br>
    <input name="nombre" value="<?= $fila['nombres'] ?>" placeholder="Nombre"><br>
    <input name="dni" value="<?= $fila['dni'] ?>" placeholder="DNI"><br>
    <label for="Escuela_Profecional">Escuela Profecional:</label><br>
    <select name="Escuela_Profecional" id="Escuela_Profecional" inputmode="$_POST">
            <option namme="Escuela_Profecional" value="<?= $EPdelTesista ?>">Ing. Sistemas</option>
            <option namme="Escuela_Profecional" value="<?= $EP1 ?>">Ing. Mecanica Electrica</option>
            <option namme="Escuela_Profecional" value="<?= $EP2 ?>">Ing. Mecatronica</option>
    </select><br>
    <input type="submit" value="Actualizar">
</form>
</body>
</html>
