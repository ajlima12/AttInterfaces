<?php

require 'vendor/autoload.php';

use App\WhatsappMensageiro;
use App\EmailMensageiro; 
use App\SMSMensageiro ;

$Whatsapp = new WhatsappMensageiro();
$SMS = new SMSMensageiro();
$Email = new EmailMensageiro();

$Whatsapp->enviar("Mensagem enviada pelo: ");
$SMS->enviar("Mensagem enviada pelo: ");
$Email->enviar("Mensagem enviada pelo: ");

?>
