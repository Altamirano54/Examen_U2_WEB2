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
    <select name="Escuela_Profecional" id="Escuela_Profecional" inputmode="$_POST">
            <option value="">Selecciona una opción</option>
            <option namme="Escuela_Profecional" value="Ing. Sistemas">Ing. Sistemas</option>
            <option namme="Escuela_Profecional" value="Ing. Mecanica Electrica">Ing. Mecanica Electrica</option>
            <option namme="Escuela_Profecional" value="Ing. Mecatronica">Ing. Mecatronica</option>
    </select><br>
    <input type="submit" value="Guardar">
</form>