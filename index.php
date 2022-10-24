<?php

# Esta prueba consiste en escribir un pequeño programa que imprima los números del 1 al 100, pero que cuando el número sea múltiplo de 3, imprima la palabra “Fizz”; para múltiplos de 5 deberá imprimir “Buzz”, finalmente cuando el número sea múltiplo de 3 y de 5, deberá imprimir “FizzBuzz”.

$serie = array();

for ($i = 1; $i <= 100; $i++) {

    if ($i % 3 == 0 && $i % 5 == 0) {
        array_push($serie, "FizBuzz");
    } elseif ($i % 3 == 0) {
        array_push($serie, "Fizz");
    } elseif ($i % 5 == 0) {
        array_push($serie, "Buzz");
    } else {
        array_push($serie, $i);
    }
}

echo '<pre>';
echo print_r($serie);
echo '</pre>';
