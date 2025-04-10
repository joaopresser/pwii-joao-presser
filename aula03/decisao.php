<?php

$n = 6;

if($n>= 4){
    echo $n, "é maior ou igual a 4 + uma alegação quase possivel", "<br>";

}

if ($n){
    echo "a variavel tem valor!";
    echo "<br>";
} else  {

    echo "a variavel não tem valor!";
    echo "<br>";
}

$n1 = 1; 
$n2 = 4;

$result = ($n1/$n2)%2;

if ($result == 1){
    echo "<br>" <$result. "quociente impar de novo";
} else {
    echo "<br>"< $result, "quociente par";
}


?>