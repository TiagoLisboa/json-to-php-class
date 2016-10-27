<?php

class Area implements JsonSerializable { 
   private $id_area;
   private $nome;
   private $id_subarea;
   private $id_grupo;

   public function __construct($id_area, $nome, $id_subarea, $id_grupo) {
      $this->id_area = $id_area;
      $this->nome = $nome;
      $this->id_subarea = $id_subarea;
      $this->id_grupo = $id_grupo;
   }
   public function getId_area (){
      return $this->id_area;
   }

   public function setId_area ($id_area){
      $this->id_area = $id_area;
   }

   public function getNome (){
      return $this->nome;
   }

   public function setNome ($nome){
      $this->nome = $nome;
   }

   public function getId_subarea (){
      return $this->id_subarea;
   }

   public function setId_subarea ($id_subarea){
      $this->id_subarea = $id_subarea;
   }

   public function getId_grupo (){
      return $this->id_grupo;
   }

   public function setId_grupo ($id_grupo){
      $this->id_grupo = $id_grupo;
   }

}


?>

