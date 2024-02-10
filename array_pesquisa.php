<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    

    $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];

    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';

    echo in_array('Maçã', $lista_frutas);

    $existe = in_array('Morango', $lista_frutas);

    if($existe) {

        echo 'Sim o valor pesquisado existe no array';
    } else {
        echo 'Não o valor pesquisado não existe no array';

    }

    $lista_coisas = [ 'frutas' => $lista_frutas, ];
    
    echo '<pre>';
    print_r($lista_coisas);
    echo '</pre>';

   echo in_array('Melancia', $lista_coisas['frutas']);

    

    ?>
    
</body>
