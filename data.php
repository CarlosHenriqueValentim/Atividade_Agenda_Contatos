<?php

class Data {
    private $nome ="", $email ="", $telefone ="", $id=0;

    public function setId($id){
        $this->id = $id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function setNome($n){
        $this->nome = $n;
    }
    
    public function getNome(){
        return $this->nome;
    }
    
    public function setEmail($e){
        $this->email = $e;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function setTelefone($tel){
        $this->telefone = $tel;
    }
    
    public function getTelefone(){
        return $this->telefone;
    }
    
}

?>