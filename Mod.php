<?php

class Mod implements JsonSerializable { 
   private $id_mod;
   private $nome;

   public function __construct($id_mod, $nome) {
      $this->id_mod = $id_mod;
      $this->nome = $nome;
   }
   public function getId_mod (){
      return $this->id_mod;
   }

   public function setId_mod ($id_mod){
      $this->id_mod = $id_mod;
   }

   public function getNome (){
      return $this->nome;
   }

   public function setNome ($nome){
      $this->nome = $nome;
   }

}


?>

