<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$funcionarios = array(
    array ('nome' => 'João', 'salario' => 2500),
    array ('nome' => 'Maria', 'salario' => 3000),
    array ('nome' => 'João', 'salario' => 2200)
);

echo '<pre>';
print_r($funcionarios);
echo '</pre>';


foreach($funcionarios as $idx => $funcionario){
    
    foreach($funcionario as $idx2 => $valor){

        echo "$idx2 - $valor <br />";
    }
   

}

?>

</body>
</html>