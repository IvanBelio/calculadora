<?php

if (isset($_POST["submit"])){
    $n1 = $_POST["op1"];
    $n2 = $_POST["op2"];
    function suma($n1,$n2){
        $resultado = $n1 + $n2;
        if (is_int($resultado) OR is_float($resultado)){
            return "<h2>El resultado es $resultado</h2>";
        }else{
            return "<h2>El resultado no existe</h2>";
        }
    }

    function resta($n1,$n2){
        $resultado2 = $n1 - $n2;
        if (is_int($resultado2) OR is_float($resultado2)){
            return "<h2>El resultado es $resultado2</h2>";
        }else{
            return "<h2>El resultado no existe</h2>";
        }
    }

    function multiplicacion($n1,$n2){
        $resultado3 = $n1 * $n2;
        if (is_int($resultado3) OR is_float($resultado3)){
            return "<h2>El resultado es $resultado3</h2>";
        }else{
            return "<h2>El resultado no existe</h2>";
        }
    }

    function division($n1,$n2){
        $resultado4 = $n1 / $n2;
        if (is_int($resultado4) OR is_float($resultado4)){
            return "<h2>El resultado es $resultado4</h2>";
        }else{
            return "<h2>El resultado no existe</h2>";
        }
    }

    $operador = $_POST["operador"];
    echo match ($operador) {
        "+" => suma($n1,$n2),
        "-" => resta($n1,$n2),
        "*" => multiplicacion($n1,$n2),
        default => division($n1,$n2),
    };
}

?>