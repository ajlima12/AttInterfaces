<?php

namespace App;

use App\Mensageiro;

class SMSMensageiro implements Mensageiro {
    protected $message;

    public function enviar($message) {
        if ($message) {
            echo "\n $message SMS \n";
        }
    }
}

?>
