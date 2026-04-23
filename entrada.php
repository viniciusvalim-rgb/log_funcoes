<?php

require_once "biblioteca.php";

use function matematica\somar;
use function texto\concatenar;
use function logica\exercito;
echo "soma: ", somar (2,3);
echo "\nnome: ", concatenar("vinicius","borges");
echo "\nexercito: ", exercito(18, "masculino");



?>