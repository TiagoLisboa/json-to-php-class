<?php

class Matriz implements JsonSerializable { 
   private $id_matriz;
   private $nome;
   private $ano;
   private $id_curso;

   public function __construct($id_matriz, $nome, $ano, $id_curso) {
      $this->id_matriz = $id_matriz;
      $this->nome = $nome;
      $this->ano = $ano;
      $this->id_curso = $id_curso;
   }
   public function getId_matriz (){
      return $this->id_matriz;
   }

   public function setId_matriz ($id_matriz){
      $this->id_matriz = $id_matriz;
   }

   public function getNome (){
      return $this->nome;
   }

   public function setNome ($nome){
      $this->nome = $nome;
   }

   public function getAno (){
      return $this->ano;
   }

   public function setAno ($ano){
      $this->ano = $ano;
   }

   public function getId_curso (){
      return $this->id_curso;
   }

   public function setId_curso ($id_curso){
      $this->id_curso = $id_curso;
   }

}


?>

