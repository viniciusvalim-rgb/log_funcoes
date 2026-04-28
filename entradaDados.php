<?php
require_once "bibliotecaFuncoes.php";

use function conversao\dolar;
use function conversao\euro;
use function conversao\peso;
use function conversao\libra;
use function conversao\eine;

echo "valor em dolar: ", dolar (5,3);
echo "\nvalor em euro: ", euro (5.85,3);
echo "\nvalor em peso: ", peso (0.0035,3);
echo "\nvalor em libra: ", libra (6.74,3);
echo "\nvalor em eine: ", eine (0.031,3);


?>