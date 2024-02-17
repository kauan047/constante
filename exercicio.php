<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


$numeros = array(8,20,30,35,42,55);

foreach ($numeros as $num){

    if($num >=1 && $num <=60){

        $numeros = rand(1, 60);
         
    }

    
    echo "{$numeros} => {$num} ";
    print_r($num) ."<br>";

}




    ?>

     

'<hr/>';

    <?php
        $numeros = array();

        while(count($numeros) <= 5) {

            $num = rand(1, 60);
                if(!in_array($num, $numeros)) {

                    $numeros[] = $num;
                }
        }

        print_r($numeros);
    ?>

</body>
</html>