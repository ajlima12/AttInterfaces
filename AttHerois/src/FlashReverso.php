<?php

namespace App;

use App\Personagem;

class FlashReverso implements Personagem {

    public function Atacar($NomeGolpe, $PontuacaoDano){

        $classe = 'Flash Reverso';

        echo "
        \n ......................................
        \n + Classe: $classe
        \n + Golpe: $NomeGolpe.
        \n + Dano causado (HP): $PontuacaoDano.
        \n ......................................
        ";

    }
    
}

?>
