<?php

class Turma implements JsonSerializable { 
   private $id_turma;
   private $nome;
   private $turno;
   private $qtd_alunos;
   private $per_atual;
   private $id_matriz;
   private $id_sem_plan;

   public function __construct($id_turma, $nome, $turno, $qtd_alunos, $per_atual, $id_matriz, $id_sem_plan) {
      $this->id_turma = $id_turma;
      $this->nome = $nome;
      $this->turno = $turno;
      $this->qtd_alunos = $qtd_alunos;
      $this->per_atual = $per_atual;
      $this->id_matriz = $id_matriz;
      $this->id_sem_plan = $id_sem_plan;
   }
   public function getId_turma (){
      return $this->id_turma;
   }

   public function setId_turma ($id_turma){
      $this->id_turma = $id_turma;
   }

   public function getNome (){
      return $this->nome;
   }

   public function setNome ($nome){
      $this->nome = $nome;
   }

   public function getTurno (){
      return $this->turno;
   }

   public function setTurno ($turno){
      $this->turno = $turno;
   }

   public function getQtd_alunos (){
      return $this->qtd_alunos;
   }

   public function setQtd_alunos ($qtd_alunos){
      $this->qtd_alunos = $qtd_alunos;
   }

   public function getPer_atual (){
      return $this->per_atual;
   }

   public function setPer_atual ($per_atual){
      $this->per_atual = $per_atual;
   }

   public function getId_matriz (){
      return $this->id_matriz;
   }

   public function setId_matriz ($id_matriz){
      $this->id_matriz = $id_matriz;
   }

   public function getId_sem_plan (){
      return $this->id_sem_plan;
   }

   public function setId_sem_plan ($id_sem_plan){
      $this->id_sem_plan = $id_sem_plan;
   }

}


?>

