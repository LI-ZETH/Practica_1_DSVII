<?php
// Imprime Hola Mundo en ingles
echo "Hello World!" . "\n";
// Operaciones matematicas
// SUMA
$numero1 = 5;
$numero2 = 3;
$resultadosuma = $numero1 + $numero2;
echo "Suma: " . $resultadosuma . "\n";

// RESTA
$numero3 = 10;
$numero4 = 4;
$resultadoresta = $numero3 - $numero4;
echo "Resta: " . $resultadoresta . "\n";

// MULTIPLICACION
$numero5 = 7;
$numero6 = 3;
$resultadomulti = $numero5 * $numero6;
echo "Multiplicacion: " . $resultadomulti . "\n";

// DIVISION 
$numero1 = 15;
$numero2 = 5;
$resultadodivision = $numero1 / $numero2;
echo "Division: " . $resultadodivision . "\n";

// MODULO
$numero3 = 10;
$numero4 = 3;
$resultadomodulo = $numero3 % $numero4;
echo "Modulo: " . $resultadomodulo . "\n";

//POTENCIA
$base = 2;
$exponente = 3;
$resultadoexpo = $base ** $exponente;
echo "Potencia: " . $resultadoexpo . "\n";

//PRECEDENCIA
$resultado1 = 2 + 3 * 4;
$resultado2 = (2 + 3) * 4;
echo "Resultado de precedencia 1: " . $resultado1 . "\n";
echo "Resultado de precedencia 2: " . $resultado2 . "\n";
?>