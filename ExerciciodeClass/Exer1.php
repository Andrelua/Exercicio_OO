<?php

class Media {
    public $nome;
    protected $matricula;
    public $nota = array();

    public function __construct($nome, $matricula, $nota1, $nota2){
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->nota[0] = $nota1;
        $this->nota[1] = $nota2;
    }

    public function media(){
        $media = ($this->nota[0] + $this->nota[1])/2;
        return "A média é igual a: ".$media;
    }
}

$aluno1 = new Media("André", "1234123", 4, 10);
echo $aluno1->media();
