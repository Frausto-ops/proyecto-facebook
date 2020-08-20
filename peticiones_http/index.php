<?php 
    $clase="encabezado";
    $clase2 = "encabezado2";
 
    $calificacion = 7;
 
    $tabla = 7;
?>
<!Doctype html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
</head>
<body>
<?php 
    echo "<h1 class='$clase'>Hola a todos!</h1>";
    echo "<h2 class='".$clase2."'>Este es un saludo</h2>";
?>
<h2>Este es un h2</h2>
<br><br>
<?php 
if($calificacion >= 8){
?>
<div style="background-color: green; padding:15px; color:#fff;">
    <h1>FELICIDADES, HAZ APROBADO LA MATERIA!!</h1>    
</div>
<?php 
}else{
?>
<div style="background-color: red; padding:15px; color:#fff;">
    <h1>LO SIENTO, NO HAZ APROBADO LA MATERIA!!</h1>    
</div>
<?php 
}
?>
 
<div style="padding: 20px; border:1px solid; margin-top:30px; width:30%;">
<h2>La tabla del <?php echo $tabla;?></h2>
<ul>
    <?php for($var=1;$var<11;$var++){?>
    <li><?php echo $tabla." x ".$var." = ". ($tabla*$var); ?></li>
    <?php }?>
</ul>
</div>
</body>
</html>