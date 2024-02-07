<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $texto = 'Curso Completo de PHP';

    echo $texto . '<br>'; 
    echo strtolower($texto);

    echo '<hr />';
    
    echo $texto . '<br />';
    echo strtoupper($texto);

    echo '<hr />';

    echo $texto . '<br />';
    echo ucfirst($texto);

    echo '<hr />';

    echo $texto . '<br />';
    echo strlen($texto);

    echo '<hr />';

    echo $texto . '<br />';
    echo str_replace('PHP', 'C#', $texto);

    echo '<hr />';

    echo $texto . '<br />';
    echo substr($texto, 0, 14) ;


    

    ?>

</body>
</html>