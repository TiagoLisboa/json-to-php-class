<?php

class Com_cur implements JsonSerializable { 
   private $id_com_cur;
   private $nome;
   private $car_hor;
   private $id_matriz;
   private $id_nucleo;
   private $id_area;

   public function __construct($id_com_cur, $nome, $car_hor, $id_matriz, $id_nucleo, $id_area) {
      $this->id_com_cur = $id_com_cur;
      $this->nome = $nome;
      $this->car_hor = $car_hor;
      $this->id_matriz = $id_matriz;
      $this->id_nucleo = $id_nucleo;
      $this->id_area = $id_area;
   }
   public function getId_com_cur (){
      return $this->id_com_cur;
   }

   public function setId_com_cur ($id_com_cur){
      $this->id_com_cur = $id_com_cur;
   }

   public function getNome (){
      return $this->nome;
   }

   public function setNome ($nome){
      $this->nome = $nome;
   }

   public function getCar_hor (){
      return $this->car_hor;
   }

   public function setCar_hor ($car_hor){
      $this->car_hor = $car_hor;
   }

   public function getId_matriz (){
      return $this->id_matriz;
   }

   public function setId_matriz ($id_matriz){
      $this->id_matriz = $id_matriz;
   }

   public function getId_nucleo (){
      return $this->id_nucleo;
   }

   public function setId_nucleo ($id_nucleo){
      $this->id_nucleo = $id_nucleo;
   }

   public function getId_area (){
      return $this->id_area;
   }

   public function setId_area ($id_area){
      $this->id_area = $id_area;
   }

}


?>

