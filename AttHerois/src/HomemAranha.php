<?php

namespace App;

use App\Personagem;

class HomemAranha implements Personagem {

    public function Atacar($NomeGolpe, $PontuacaoDano){

        $classe = 'Homem-Aranha';

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
