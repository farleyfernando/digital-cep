<?php 

require_once "vendor/autoload.php";

use Wead\DigitalCep\Search;

$busca = new search;

$resultado = $busca->getAdressFromZipCode('05010000');

print_r($resultado);

?>