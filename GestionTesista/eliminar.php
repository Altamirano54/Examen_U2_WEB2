
<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    require_once "../Conexion.php";

    $objConexion = new Conexion();
    $con = $objConexion->getConexion();

    $sql = "UPDATE tesista SET estado = 0 WHERE id = $id";

    if ($con->query($sql) === true) {
         echo "si se pudo";
        header("Location: ../GestionTesista.php");
    } else {
        echo "no se pudo eliminar los datos";
        header("Location: ../GestionTesista.php");
    }
}

