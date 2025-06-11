<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion de Tesistas</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr>
                <th>TITULO</th>
                <th>LINEA DE INVESTIGACION</th>
                <th>RESUMEN</th>
                <th>OBJETIVOS</th>
                <th>FECHA</th>
                <th>TESISTA</th>
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
                    echo "<td>". $fila['Resumen']. "</td>";
                    echo "<td>". $fila['Objetivos']. "</td>";
                    echo "<td>". $fila['Fecha_fin']. "</td>";
                    echo "<td>". $fila['Apellido']." ".$fila['Nombre'] . "</td>";
                    echo "<td>
                            <a href='GestionTesis/editar.php?id={$fila['id']}'>Editar</a>
                            <a href='GestionTesis/eliminar.php?id={$fila['id']}'>Eliminar</a>
                          </td>";
                    echo "</tr>";
                    echo"</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No hay resultados</td></tr>";
            }
            ?>
        </tbody>
    </table>

    <a href="GestionTesis/Ingresar.php">registrar nuevo tesis</a>
</body>
</html>