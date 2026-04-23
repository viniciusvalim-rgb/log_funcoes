<?php

namespace matematica{
    function somar($a, $b){
        return $a + $b;
    } 

    function subtrair($a, $b){
        return $a - $b;
    }

    function multiplicar($a,$b){
        return $a * $b;
    }

    function dividir($a,$b){
        return $a /$b;
    }
}
namespace texto{
    function concatenar($nome, $sobrenome){
        return $nome . " ". $sobrenome;
    }
}
namespace logica{
    function idade($id){
        if ($id >= 18){
        echo "maior de idade";
    } 
    else{
        echo "menor de idade";
        }
    
    }
    function exercito($sexo, $id){
        if ($id >= 18 && $sexo = "masculino"){
            return "voce esta apto para servir o exercito";
        }
        else {
            return "voce nao cumpre os requisitos";
        }
    }
}
?>