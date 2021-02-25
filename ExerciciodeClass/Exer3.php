<?php

class Pessoa {
    public $nome;
    public $dataNascimento;
    public $altura;

    public function __construct($nome, $data, $altura) {
        $this->nome = $nome;
        $this->dataNascimento = $data;
        $this->altura = $altura;
    }

    public function setNome() {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setData($data) {
        $this->dataNascimento = $data;
    }

    public function getData() {
        return $this->dataNascimento;
    }

    public function setAlt($altura) {
        $this->altura = $altura;
    }

    public function getAlt() {
        return $this->altura;
    }

    public function mostarDados() {
        return "Nome:".$this->nome."Data de nascimento:".$this->dataNascimento."Altura: ".$this->altura."<br>";
    }

    public function calcIdade() {
        $data = "25/2/2021";
        $arr = explode('/', $this->dataNascimento);
        $arr2 = explode('/', $data);

        echo $idade = $arr2[2] - $arr[2];
    }
}

$test = new Pessoa("André", "4/4/2000", "1.88");

echo "<br>";
echo $test->getNome();
echo "<br>";
echo $test->getAlt();
echo "<br>";
echo $test->getData();
echo "<br>";
$test->calcIdade();