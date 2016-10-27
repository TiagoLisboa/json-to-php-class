<?php

class Sem_plan implements JsonSerializable { 
   private $id_sem_plan;
   private $semestre;
   private $id_plan;

   public function __construct($id_sem_plan, $semestre, $id_plan) {
      $this->id_sem_plan = $id_sem_plan;
      $this->semestre = $semestre;
      $this->id_plan = $id_plan;
   }
   public function getId_sem_plan (){
      return $this->id_sem_plan;
   }

   public function setId_sem_plan ($id_sem_plan){
      $this->id_sem_plan = $id_sem_plan;
   }

   public function getSemestre (){
      return $this->semestre;
   }

   public function setSemestre ($semestre){
      $this->semestre = $semestre;
   }

   public function getId_plan (){
      return $this->id_plan;
   }

   public function setId_plan ($id_plan){
      $this->id_plan = $id_plan;
   }

}


?>

