<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      <?php


    $funcionario1 = null;
    $funcionario2 = '';
    $funcionario3 = false;

    if(is_null($funcionario1)) {
        echo 'Sim, a variável é null';
    } else {

        echo 'Não, a variável não é null';
    }



    echo '<br />';
    if(empty($funcionario1)) {
        echo 'Sim, a variável é null';
    } else {

        echo 'Não, a variável não é null';
    }

    echo '<br />';
    if(empty($funcionario2)){
        echo 'Sim a varável está vazia';

    } else {
echo 'Não, a variável não está vazia';

    }

    echo '<br />';
    if(is_null($funcionario3)){
        echo 'Sim a varável está vazia';

    } else {
echo 'Não, a variável não está vazia';

    }
    
    

      ?>
</body>
</html>