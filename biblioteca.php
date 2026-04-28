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
namespace conversao{
    function dolar($cotadolar, $real) {
        return $cotadolar * $real;
    }
    function euro($cotaeuro, $real){
        return $cotaeuro * $real;
    }
    function peso($cotapeso, $real){
        return $cotapeso * $real;
    }
    function libra($cotalibra, $real){
        return $cotalibra * $real;
    }
    function eine($cotaeine, $real){
        return $cotaeine * $real;
    }
    }
namespace geometria{
    function areaquadrado($lado){
        return $lado * $lado;
    }
    function arearetangulo($base, $altura){
        return $base * $altura;
    }
    function areatriangulo($base, $altura){
        return ($base * $altura) / 2;
    }
    function areacirculo($raio){
      return 3.14 * ($raio * $raio);
    }
    function areatrapezio($basemaior, $basemenor, $altura){
       return (($basemaior + $basemenor) * $altura) / 2;
    }
    }


?>