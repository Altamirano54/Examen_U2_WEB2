<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de tesis y Tesista</title>
</head>
<body>
    <H1>Gestion de tesis y Tesistas</H1>
    <table border="1">
        <thead>
            <tr>
                <th>Titulo</th>
                <th>linea de investigacion</th>
                <th>Tesista</th>
                <th>fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "Conexion.php";
            $sql = "SELECT * FROM Tesis AS ts INNER JOIN Tesista AS te ON
                     ts.id_tesista=te.id WHERE ts.estado = 1 ORDER BY ts.Titulo";
            $objConexion = new Conexion();
            $con = $objConexion->getConexion();
            $resultado = $con->query($sql);
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>". $fila['Titulo']. "</td>";
                    echo "<td>". $fila['Linea_Investigacion']. "</td>";
                    echo "<td>". $fila['Apellido']." ".$fila['Nombre'] . "</td>";
                    echo "<td>". $fila['Fecha_fin']. "</td>";

                }
            } else {
                echo "<tr><td colspan='4'>No hay resultados</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="GestionTesista.php"> Gestionar Tesistas</a>
    <a href="GestionTesis.php"> Gestionar Tesis</a>
</body>
</html>