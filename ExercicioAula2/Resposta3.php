<?php

class Televisao {
    protected $volume = 0;
    protected $canal = array(1 => "Globo", 2 => "Record", 3 => "SBT");

    public function __construct($numero, $canal){
        $this->canal[$numero] = $canal;
    }

    /* Volume */
    
    public function setVol($vol){
        $this->volume = $vol;
    }

    public function getVol(){
        return $this->volume;
    }

    /* Canal */
    
    public function setCanal($numero ,$canal){
        $this->canal[$numero] = $canal;
    }

    public function getCanais(){
        for ($i = 1; $i <= 4; $i++) {
            echo "Número - ".$i." Canal - ".$this->canal[$i]."<br>";
        }
    }

    public function getCanalByNum($numero){
        return $this->canal[$numero];
    }
}

class ControleRemoto extends Televisao{
    protected $volume;
    protected $canal = array();

    public function mostrarVolume(){
        echo $this->volume;
    }

    public function aumentarVolume($mais) {
        $this->volume += $mais;
    }

    public function diminuirVolume($menos) {
        $this->volume -= $menos;
    }

    public function mostrarCanais(){
        return parent::getCanais();
    }
}

$tv = new Televisao(4, "RedeTv");
echo $tv->getVol();
echo "<br>";
$controle = new ControleRemoto(5, "Cultura");
print_r($controle->mostrarCanais());
echo "<br>";
print_r($tv->getCanais());
