<!DOCTYPE html>
<html>
 
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
 
<body style="padding: 20px;">
    <h1>CALCULADORA</h1>
    <br><br><br>
 
    <form action="calculadora.php" method="POST" class="form-inline">
        <div class="form-group mb-2">
            <label for="numero1" class="col-form-label">Primer Numero</label>
            <input type="number" id="numero1" name="primerNum" class="form-control-plaintext">
        </div>
        <div class="form-group">
            <label for="operacion">Operador</label>
            <select name="operador" id="operacion" class="form-control">
                <option value="multiplicar">*</option>
                <option value="dividir">/</option>
                <option value="sumar">+</option>
                <option value="restar">-</option>
            </select>
        </div>
        <div>
            <label for="numero2" class="col-form-label">Segundo Numero</label>
            <input type="number" id="numero2" name="segundoNum" class="form-control-plaintext">
        </div>
        <br><br>
        <input class="btn btn-primary" type="submit" name="btn1" value="Calcular">
    </form>
    <br><br>
    <?php
    if (isset($_POST['btn1'])) {
        $num1 = $_POST["primerNum"];
        $operador = $_POST["operador"];
        $num2 = $_POST["segundoNum"];
 
        switch ($operador) {
            case 'multiplicar':
                echo "<h1>El resultado de $num1 x $num2 =" . ($num1 * $num2) . "</h1>";
                break;
            case 'dividir':
                echo "<h1>El resultado de $num1 / $num2 =" . ($num1 / $num2) . "</h1>";
                break;
            case 'sumar':
                echo "<h1>El resultado de $num1 + $num2 =" . ($num1 + $num2) . "</h1>";
                break;
            case 'restar':
                echo "<h1>El resultado de $num1 - $num2 =" . ($num1 - $num2) . "</h1>";
                break;
            default:
                echo "<h1>Algo estuvo mal</h1>";
                break;
        }
    }else{
        echo "<h1>Bienvenido, comienza realizando una operación...</h1>";
    }
    ?>
</body>
 
</html>