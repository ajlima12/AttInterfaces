<?php

namespace App;

use App\Mensageiro;

class WhatsappMensageiro implements Mensageiro {
    
    protected $message;

    public function enviar($message) {
        if ($message) {
            echo "\n $message Whatsapp \n";
        }
    }
}

?>
