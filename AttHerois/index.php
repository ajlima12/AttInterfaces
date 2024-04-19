<?php

require 'vendor/autoload.php';

use App\Flash;
use App\FlashReverso;
use App\HomemAranha;

$flash = new Flash();
$flashReverso = new FlashReverso();
$homemAranha = new HomemAranha();

$flash->Atacar("Golpe Relâmpago", "250");
$flashReverso->Atacar("Impacto Negativo", "200");
$homemAranha->Atacar("Teia de Aranha", "100");

?>

