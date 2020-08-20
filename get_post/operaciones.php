 <?php
    $num1 = $_POST["primerNum"];
    $operador = $_POST["operador"];
    $num2 = $_POST["segundoNum"];
     
    switch($operador){
    case'multiplicar':
    echo"<h1>El resultado de $num1 x $num2 =".($num1*$num2)."</h1>";
    break;
    case'dividir':
    echo"<h1>El resultado de $num1 / $num2 =".($num1/$num2)."</h1>";
    break;
    case'sumar':
    echo"<h1>El resultado de $num1 + $num2 =".($num1+$num2)."</h1>";
    break;
    case'restar':
    echo"<h1>El resultado de $num1 - $num2 =".($num1-$num2)."</h1>";
    break;
    default:
    echo"<h1>Algo estuvo mal</h1>";
    break;
        }
    ?>
    
