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
                <th>Apellido</th>
                <th>Nombre</th>
                <th>DNI</th>
                <th>Escuela profecional</th>
            </tr>
        </thead>
        <tbody>
            <?php
            require_once "Conexion.php";
            $sql = "SELECT * FROM  Tesista AS te  WHERE te.estado = 1 ORDER BY te.Apellido";
            $objConexion = new Conexion();
            $con = $objConexion->getConexion();
            $resultado = $con->query($sql);
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>". $fila['Apellido']. "</td>";
                    echo "<td>". $fila['Nombre']. "</td>";
                    echo "<td>". $fila['DNI']. "</td>";
                    echo "<td>". $fila['Escuela_Profecional']. "</td>";
                    echo "<td>
                            <a href='GestionTesista/editar.php?id={$fila['id']}'>Editar</a>
                            <a href='GestionTesista/eliminar.php?id={$fila['id']}'>Eliminar</a>
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

    <a href="GestionTesista/Ingresar.php">registrar nuevo tesita</a>
</body>
</html>