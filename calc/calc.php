<?php

    function total($num1,$num2){
        $total;
        return $total;
        echo $total;
    }

    function soma($num1,$num2){
        $resultsoma = $num1 + $num2;
        return $resultsoma;
        echo $resultsoma;
    }

    function subi($num1,$num2){
        $resultsubi = $num1 - $num2;
        return $resultsoma;
        echo $resultsubi;
    }

    function mult($num1,$num2){
        $resultmult = $num1 * $num2;
        return $resultsoma;
        echo $resultmult;
    }

    function divi($num1,$num2){
        $resultdivi = $num1 / $num2;
        return $resultsoma;
        
        if($resultdivi != "0"){
            echo $resultdivi;
        } else {
            echo "Falha na Matrix";
        }
    }

?>