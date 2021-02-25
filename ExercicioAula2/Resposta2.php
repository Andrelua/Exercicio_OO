<?php

class Pessoa {
    private $name;
    private $cpf;
    private $rg;
    private $data_nascimento;
    

    public function __cosntruct($name, $cpf, $rg) {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->rg = $rg;
    }

    /* Nome */

    public function setName($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }

    /* CPF */
    
    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }

    /* RG */
    
    public function setRg($rg){
        $this->rg = $rg;
    }

    public function getRg(){
        return $this->rg;
    }

    /* Data de nascimento */
    
    public function setData($data){
        $this->data_nascimento = $data;
    }

    public function getData(){
        return $this->data_nascimento;
    }
}

class Endereco {
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
    private $complemento;

    public function __cosntruct($rua, $bairro, $cidade, $estado, $cep, $complemento) {
        $this->rua = $rua;
        $this->bairro = $bairro;
        $this->cidade = $cidade;
        $this->estado = $estado;
        $this->cep = $cep;
        $this->complemento = $complemento;
    }

    /* Rua */

    public function setRua($rua){
        $this->rua = $rua;
    }

    public function getRua(){
        return $this->rua;
    }

    /* Bairro */
    
    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getBairro(){
        return $this->bairro;
    }

    /* Cidade */
    
    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getCidade(){
        return $this->cidade;
    }

    /* Estado */
    
    public function setEstado($estado){
        $this->estado = $estado;
    }

    public function getEstado(){
        return $this->estado;
    }

    /* Cep */
    
    public function setCep($cep){
        $this->cep = $cep;
    }

    public function getCep(){
        return $this->cep;
    }

    /* Complemento */
    
    public function setComp($comp){
        $this->complemento = $comp;
    }

    public function getComp(){
        return $this->complemento;
    }
}

$pessoa = new Pessoa("André Luan", "12312312300", "1231231");
$pessoa->setData("24/02/2021");
# test - echo $pessoa->getData();

$endereco = new Endereco("José Antonio", "Centro", "São Paulo", "São Paulo", "99500123", "Casa");
