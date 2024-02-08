<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
/*
echo date('d/m/Y H:i');


date_default_timezone_get();
date_default_timezone_set('America/Sao_Paulo');
echo '<br />';
echo date('d/m/Y H:i');
*/

$data_inicial = '2018-04-24';
$data_final = '2018-05-15';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

echo $data_inicial . ' - ' . $time_inicial;
echo '<br />';
echo $data_final . ' - ' . $time_final;

$diferenca_times = abs($time_inicial - $time_final);

echo '<br />';
echo 'A diferença de segundos entre a data inicial e final é ' . $diferenca_times;

$segundos_existem_dia = 24 * 60 * 60;

echo '<br/>';
echo 'Um dia possui' . $segundos_existem_dia . 'segundos';

$diferenca_de_dias_entre_as_datas = $diferenca_times / $segundos_existem_dia;

echo '<br />';
echo 'A diferença em dias é: ' .$diferenca_de_dias_entre_as_datas;
?>
</body>
</html>