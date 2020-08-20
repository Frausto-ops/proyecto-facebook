<!DOCTYPE html>
<html>
 
<head>
    <title>METODOS GET Y POST</title>
</head>
 
<body>
<form action="recibir.php" method="GET">
<label>Nombre</label>
<input type="text" placeholder="Escribe aqui tu nombre" name="nombre">
<br><br>
<input type="submit" name="btn1" value="Enviar">
</form>
 
<br><br><br>
 
<form action="operaciones.php" method="POST">
    <input type="number" name="primerNum">
    <select name="operador">
        <option value="multiplicar">*</option>
        <option value="dividir">/</option>
        <option value="sumar">+</option>
        <option value="restar">-</option>
    </select>
    <input type="number" name="segundoNum">
    <br><br>
    <input type="submit" name="btn1" value="Calcular">
</form>
</body>
 
</html>