<?php

$salario = 2500;

if($salario <= 1903.98) {

    echo "isento de imposto";
    
    
}



else if($salario >= 1903.99 && $salario < 2826.66){

 $cal = ($salario * 7.5)/100;

 return $cal;

}

else if($salario >= 2826.66 && $salario < 3751.05){

 $cal = ($salario * 15)/100;
    
}

else if($salario >= 3751.06 && $salario <4664.67){

    $cal = ($salario * 22.5)/100;
}

else if($salario >=4664.88){

    $cal = ($salario * 27.5)/100;
}

?>

