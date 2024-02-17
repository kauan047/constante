<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $registros = 
        array ('titulo' => 'Título notícia 1', 'conteudo' => 'Conteúdo notícia 1', 'Título notícia 1', 'Título notícia 1');
        array ('titulo' => 'Título notícia 2', 'conteudo' => 'Conteúdo notícia 2', 'Título notícia 2', 'Título notícia 2');
        array ('titulo' => 'Título notícia 3', 'conteudo' => 'Conteúdo notícia 3', 'Título notícia 3', 'Título notícia 3');
    
    

        echo '<pre>';
        print_r($registros);
        echo '</pre>';

        /*
    $idx = 0;
    while($idx < 3) {

        echo $registros[$idx];
        echo '<hr />';

        $idx++;
    }
*/

   ?>

</body>
</html>