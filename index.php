<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible"
    content="ie=edge">
    <link rel="stylesheet" href="estilos.css">
    <title>Calculadora</title>
</head>
<body>
    <form class ="caja" action="calculadora.php" method="get">
    <h1>Calculadora PHP</h1><br><i>Alumno: Walter Ivan Zalazar</i>
    <input type="text" name="numero1" value="" placeholder ="Ingrese un numero">
    <input type="text" name="numero2" value="" placeholder="Ingrese otro numero">
    <select name="opciones">
        <option value="0">Sumar</option>
        <option value="1">Restar</option>
        <option value="2">Multiplicar</option>
        <option value="3">Dividir</option>
</select>
        <input type="submit" name="calcular" value="Calcular">
    <output type = "number" name="" value="" >
    
    
    
    </form>
</body>
</html>
<?php
include("clases.php");
if(isset($_REQUEST['calcular'])){

$n1=$_REQUEST['numero1'];
$n2=$_REQUEST['numero2'];
$op=$_REQUEST['opciones'];

switch($op){

    case 0:echo "$n1 + $n2 = ".matematica::sumar($n1,$n2);break;
    case 1:echo "$n1 - $n2 = ".matematica::restar($n1,$n2);break;
    case 2:echo "$n1 * $n2 = ".matematica::multiplicar($n1,$n2);break;
    case 3:echo "$n1 / $n2 = ".matematica::dividir($n1,$n2);break;
}

}


?>