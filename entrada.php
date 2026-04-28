<?php

require_once "biblioteca.php";

use function matematica\somar;
use function matematica\subtrair;
use function matematica\multiplicar;
use function matematica\dividir;

use function texto\concatenar;

use function logica\exercito;

use function conversao\dolar;
use function conversao\euro;
use function conversao\peso;
use function conversao\libra;
use function conversao\eine;

use function geometria\areaquadrado;
use function geometria\arearetangulo;
use function geometria\areatriangulo;
use function geometria\areacirculo;
use function geometria\areatrapezio;

echo "valor em dolar: ", dolar (5,3);
echo "\nvalor em euro: ", euro (5.85,3);
echo "\nvalor em peso: ", peso (0.0035,3);
echo "\nvalor em libra: ", libra (6.74,3);
echo "\nvalor em eine: ", eine (0.031,3);

echo "\narea do quadrado: ", areaquadrado(8);
echo "\narea do retangulo: ", arearetangulo(4, 4);
echo "\narea do triangulo: ", areatriangulo(4, 4);
echo "\narea do circulo: ", areacirculo(4);
echo "\narea do trapezio: ", areatrapezio(4, 6, 4);

echo "\nsoma: ", somar (2,3);
echo "\nsubtracao: ", subtrair (8, 4);
echo "\nmultiplicacao: ", multiplicar(3, 3);
echo "\ndivisao: ", dividir(9, 3);

echo "\nnome: ", concatenar("vinicius","borges");

echo "\nexercito: ", exercito(18, "masculino");



?>