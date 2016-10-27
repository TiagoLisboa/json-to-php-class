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
