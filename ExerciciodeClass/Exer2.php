<?php

class Elevador {
    public $terreo = 0;
    public $cobertura;
    public $elevadorCp;
    public $pessoas = 0;

    public function __cosntruct($tamanho, $capaciadade){
        $this->cobertura = $tamanho;
        $this->elevadorCp = $capaciadade;
    }

    public function entrarPessoa($entrar) {
        $this->pessoas += $entrar;
        if ($this->pessoas > $this->elevadorCp) {
            echo $this->elevadorCp."<br>";
        }
    }

    public function sairPessoa($sair) {
        if (!empty($this->pessoas)) {
            $this->pessoas -= $sair;
        } else {
            echo "O elevador não tem niguem, então ninguem saiu.<br>";
        }
    }
/* Incompleto */
}

$predio = new Elevador(10, 3);
$predio->sairPessoa(2);
$predio->entrarPessoa(4);