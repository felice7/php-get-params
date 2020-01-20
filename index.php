<?php

$frase = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';

//METODO CON ARRAY
// $sostituire = array('ipsum', 'tempor', 'aliquip');


//METODO CON GET
$sostituire = $_GET['badword'];

$parola_da_sostituire = '***';

$sostituzione = str_replace($sostituire, $parola_da_sostituire, $frase);

var_dump($sostituzione);

 ?>
