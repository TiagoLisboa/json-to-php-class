<?php

class Plan implements JsonSerializable { 
   private $id_plan;
   private $nome;
   private $dat_cri;
   private $dat_exe;
   private $id_pro;

   public function __construct($id_plan, $nome, $dat_cri, $dat_exe, $id_pro) {
      $this->id_plan = $id_plan;
      $this->nome = $nome;
      $this->dat_cri = $dat_cri;
      $this->dat_exe = $dat_exe;
      $this->id_pro = $id_pro;
   }
   public function getId_plan (){
      return $this->id_plan;
   }

   public function setId_plan ($id_plan){
      $this->id_plan = $id_plan;
   }

   public function getNome (){
      return $this->nome;
   }

   public function setNome ($nome){
      $this->nome = $nome;
   }

   public function getDat_cri (){
      return $this->dat_cri;
   }

   public function setDat_cri ($dat_cri){
      $this->dat_cri = $dat_cri;
   }

   public function getDat_exe (){
      return $this->dat_exe;
   }

   public function setDat_exe ($dat_exe){
      $this->dat_exe = $dat_exe;
   }

   public function getId_pro (){
      return $this->id_pro;
   }

   public function setId_pro ($id_pro){
      $this->id_pro = $id_pro;
   }

}


?>

