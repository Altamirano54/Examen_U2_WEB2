<h1>Ingresa Tesista</h1>
<form action="procesa_insert.php" method="POST"> <br>
    <input name="apellido" placeholder="Apellido"><br>
    <input name="nombre" placeholder="Nombre"><br>
    <input name="dni" placeholder="DNI"><br>
    <label for="Escuela_Profecional">Escuela Profecional:</label><br>
    <select name="Escuela_Profecional" id="Escuela_Profecional" inputmode="$_POST">
            <option value="">Selecciona una opción</option>
            <option namme="Escuela_Profecional" value="Ing. Sistemas">Ing. Sistemas</option>
            <option namme="Escuela_Profecional" value="Ing. Mecanica Electrica">Ing. Mecanica Electrica</option>
            <option namme="Escuela_Profecional" value="Ing. Mecatronica">Ing. Mecatronica</option>
    </select><br>
    <input type="submit" value="Guardar">
</form>