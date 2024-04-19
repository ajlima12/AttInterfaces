<?php

namespace App;

use App\Mensageiro;

class EmailMensageiro implements Mensageiro
{
    private $message;

    public function enviar($message)
    {
        if ($message) {
            echo "\n $message Email \n";
        }
    }
}

?>
