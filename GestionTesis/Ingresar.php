<h1>Ingresa Tesis</h1>
<form action="procesa_insert.php" method="POST"> <br>
    <input name="titulo" placeholder="Titulo"><br>
    <label for="Linea_investigacion">Linea de investigacion:</label><br>
    <select name="Linea_investigacion" id="Linea_investigacion" inputmode="$_POST">
            <option value="">Selecciona una opción</option>
            <option namme="Linea_investigacion" value="Ing. Software">Ing. Software</option>
            <option namme="Linea_investigacion" value="Redes">Redes</option>
            <option namme="Linea_investigacion" value="Gestion TI">Gestion TI</option>
            <option namme="Linea_investigacion" value="Robotica e IA">Robotica e IA</option>
            <option namme="Linea_investigacion" value="Seguridad Informatica">Seguridad Informatica</option>
    </select><br>
    <input name="Resumen" placeholder="Resumen"><br>
    <input name="objetivos" placeholder="objetivos"><br>
    <label for="Tesista">Tesista:</label><br>
    <select name="Tesista" id="Tesista" inputmode="$_POST">
            <option value="">Selecciona una opción</option>
            <?php
            require_once "Conexion.php";
            $sql = "SELECT * FROM  Tesista AS te  WHERE te.estado = 1 ORDER BY te.Apellido";
            $objConexion = new Conexion();
            $con = $objConexion->getConexion();
            $resultado = $con->query($sql);
            if($resultado->num_rows > 0){
                while($fila = $resultado->fetch_assoc()){
                    echo "<option namme='tesista' value='". $fila['id']."'". ">".$fila['Apellido']. " ". $fila['Nombre']."</option>";

                }
            } else {
                echo "<tr><td colspan='4'>No hay resultados</td></tr>";
            }
            ?>
    </select><br>
    
    <input type="submit" value="Guardar">
</form>