<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Clase_3_estructuras</h1>
<?php 
$q=5;
$r=1;

if ($q>0) {
    echo "la variable q es un numero positivo";
    echo "<br> ";
}
if ($q>1 & $q<10) {
    echo "la variable q es mayor a 1 y menor a 10";
    echo "<br> ";
}
if ($r<10 || $r>2) {
    echo "la variable r es un numero mayor a 10 o menor a 2";
    echo "<br> ";
}

$numero1=5;
$numero2=6;

if ($numero1>$numero2) {
   echo "$numero1+$numero2";
   echo "<br> ";
} elseif ($numero1<$numero2) {
    echo "la multiplicacion de ambos es: ";
    echo $numero1*$numero2;
    echo "<br> ";
    echo "la division de ambos es: ";
    echo $numero1/$numero2;
    echo "<br> ";
    echo "el resto de ambos es: ";
    echo $numero1%$numero2;
    echo "<br> ";
} else {
    echo "los numeros ingresados son iguales";
    echo "<br> ";
}
?>
</body>
</html>