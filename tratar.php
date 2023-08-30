<?php 

/* 
atualmente eu preciso salvar um vetor int no banco pra saber se os checkbox foram marcados
*/

echo '<pre>'; print_r($_POST); 

$checkbox1 = isset($_POST['checkbox1']) ? 1 : 0 ;
$checkbox2 = isset($_POST['checkbox2']) ? 1 : 0 ;
$checkbox3 = isset($_POST['checkbox3']) ? 1 : 0 ;

$checkboxValues = array($checkbox1, $checkbox2, $checkbox3);

$checkboxString = '{' . implode(', ', $checkboxValues) . '}';

echo $checkboxString;