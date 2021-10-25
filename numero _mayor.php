<?php

$num1=$_REQUEST["num1"];
$num2=$_REQUEST["num2"];
$num3=$_REQUEST["num2"];
if ($num1>$num2 and $num1>$num3){
    echo"El numero mayor es: ".$num1;
}
elseif ($num2>$num1 and $num2>$num3){
    echo"el numero mayor es: ".$num2;
}
elseif ($num3>$num1 and $num3>$num2){
    echo "el numero mayor es: ".$num3;
}


?>







