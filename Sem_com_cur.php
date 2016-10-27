<?php

class Sem_com_cur implements JsonSerializable { 
   private $id_sem_com_cur;
   private $periodo;
   private $creditos;
   private $id_com_cur;

   public function __construct($id_sem_com_cur, $periodo, $creditos, $id_com_cur) {
      $this->id_sem_com_cur = $id_sem_com_cur;
      $this->periodo = $periodo;
      $this->creditos = $creditos;
      $this->id_com_cur = $id_com_cur;
   }
   public function getId_sem_com_cur (){
      return $this->id_sem_com_cur;
   }

   public function setId_sem_com_cur ($id_sem_com_cur){
      $this->id_sem_com_cur = $id_sem_com_cur;
   }

   public function getPeriodo (){
      return $this->periodo;
   }

   public function setPeriodo ($periodo){
      $this->periodo = $periodo;
   }

   public function getCreditos (){
      return $this->creditos;
   }

   public function setCreditos ($creditos){
      $this->creditos = $creditos;
   }

   public function getId_com_cur (){
      return $this->id_com_cur;
   }

   public function setId_com_cur ($id_com_cur){
      $this->id_com_cur = $id_com_cur;
   }

}


?>

