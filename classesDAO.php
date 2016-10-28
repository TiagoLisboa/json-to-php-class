<?php
require_once "Com_cur.php";
require_once "Conexao.php";
class Com_curDAO {
   public static function insert (Com_cur $com_cur) { 
      $con = Conexao::connect();

      $nome = $com_cur->getNome();
      $car_hor = $com_cur->getCar_hor();
      $id_matriz = $com_cur->getId_matriz();
      $id_nucleo = $com_cur->getId_nucleo();
      $id_dis = $com_cur->getId_dis();
      $sql = "INSERT INTO com_cur (nome, car_hor, id_matriz, id_nucleo, id_dis) VALUES ('$nome', '$car_hor', '$id_matriz', '$id_nucleo', '$id_dis')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Com_cur $com_cur) { 
      $con = Conexao::connect();

      $nome = $com_cur->getNome();
      $car_hor = $com_cur->getCar_hor();
      $id_matriz = $com_cur->getId_matriz();
      $id_nucleo = $com_cur->getId_nucleo();
      $id_dis = $com_cur->getId_dis();
      $id_com_cur = $com_cur->getId_com_cur();
      $sql = "UPDATE com_cur SET nome = '$nome', car_hor = '$car_hor', id_matriz = '$id_matriz', id_nucleo = '$id_nucleo', id_dis = '$id_dis' WHERE id_com_cur = '$id_com_cur'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_com_cur) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM com_cur WHERE id_com_cur = '$id_com_cur'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM com_cur";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Com_cur($i['nome'], $i['car_hor'], $i['id_matriz'], $i['id_nucleo'], $i['id_dis'], $i['id_com_cur']));
         }
      }

      Conexao::close();
   }

}

require_once "Pro.php";
require_once "Conexao.php";
class ProDAO {
   public static function insert (Pro $pro) { 
      $con = Conexao::connect();

      $nome = $pro->getNome();
      $matricula = $pro->getMatricula();
      $car_hor = $pro->getCar_hor();
      $dir_aca = $pro->getDir_aca();
      $senha = $pro->getSenha();
      $sql = "INSERT INTO pro (nome, matricula, car_hor, dir_aca, senha) VALUES ('$nome', '$matricula', '$car_hor', '$dir_aca', '$senha')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Pro $pro) { 
      $con = Conexao::connect();

      $nome = $pro->getNome();
      $matricula = $pro->getMatricula();
      $car_hor = $pro->getCar_hor();
      $dir_aca = $pro->getDir_aca();
      $senha = $pro->getSenha();
      $id_pro = $pro->getId_pro();
      $sql = "UPDATE pro SET nome = '$nome', matricula = '$matricula', car_hor = '$car_hor', dir_aca = '$dir_aca', senha = '$senha' WHERE id_pro = '$id_pro'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_pro) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM pro WHERE id_pro = '$id_pro'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM pro";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Pro($i['nome'], $i['matricula'], $i['car_hor'], $i['dir_aca'], $i['senha'], $i['id_pro']));
         }
      }

      Conexao::close();
   }

}

require_once "Vaga.php";
require_once "Conexao.php";
class VagaDAO {
   public static function insert (Vaga $vaga) { 
      $con = Conexao::connect();

      $creditos = $vaga->getCreditos();
      $id_turma = $vaga->getId_turma();
      $id_com_cur = $vaga->getId_com_cur();
      $id_sem_plan = $vaga->getId_sem_plan();
      $id_pro = $vaga->getId_pro();
      $sql = "INSERT INTO vaga (creditos, id_turma, id_com_cur, id_sem_plan, id_pro) VALUES ('$creditos', '$id_turma', '$id_com_cur', '$id_sem_plan', '$id_pro')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Vaga $vaga) { 
      $con = Conexao::connect();

      $creditos = $vaga->getCreditos();
      $id_turma = $vaga->getId_turma();
      $id_com_cur = $vaga->getId_com_cur();
      $id_sem_plan = $vaga->getId_sem_plan();
      $id_pro = $vaga->getId_pro();
      $id_vaga = $vaga->getId_vaga();
      $sql = "UPDATE vaga SET creditos = '$creditos', id_turma = '$id_turma', id_com_cur = '$id_com_cur', id_sem_plan = '$id_sem_plan', id_pro = '$id_pro' WHERE id_vaga = '$id_vaga'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_vaga) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM vaga WHERE id_vaga = '$id_vaga'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM vaga";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Vaga($i['creditos'], $i['id_turma'], $i['id_com_cur'], $i['id_sem_plan'], $i['id_pro'], $i['id_vaga']));
         }
      }

      Conexao::close();
   }

}

require_once "Disciplina.php";
require_once "Conexao.php";
class DisciplinaDAO {
   public static function insert (Disciplina $disciplina) { 
      $con = Conexao::connect();

      $nome = $disciplina->getNome();
      $car_hor = $disciplina->getCar_hor();
      $id_area = $disciplina->getId_area();
      $sql = "INSERT INTO disciplina (nome, car_hor, id_area) VALUES ('$nome', '$car_hor', '$id_area')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Disciplina $disciplina) { 
      $con = Conexao::connect();

      $nome = $disciplina->getNome();
      $car_hor = $disciplina->getCar_hor();
      $id_area = $disciplina->getId_area();
      $id_dis = $disciplina->getId_dis();
      $sql = "UPDATE disciplina SET nome = '$nome', car_hor = '$car_hor', id_area = '$id_area' WHERE id_dis = '$id_dis'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_dis) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM disciplina WHERE id_dis = '$id_dis'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM disciplina";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Disciplina($i['nome'], $i['car_hor'], $i['id_area'], $i['id_dis']));
         }
      }

      Conexao::close();
   }

}

require_once "Mod.php";
require_once "Conexao.php";
class ModDAO {
   public static function insert (Mod $mod) { 
      $con = Conexao::connect();

      $nome = $mod->getNome();
      $sql = "INSERT INTO mod (nome) VALUES ('$nome')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Mod $mod) { 
      $con = Conexao::connect();

      $nome = $mod->getNome();
      $id_mod = $mod->getId_mod();
      $sql = "UPDATE mod SET nome = '$nome' WHERE id_mod = '$id_mod'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_mod) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM mod WHERE id_mod = '$id_mod'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM mod";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Mod($i['nome'], $i['id_mod']));
         }
      }

      Conexao::close();
   }

}

require_once "Ofer.php";
require_once "Conexao.php";
class OferDAO {
   public static function insert (Ofer $ofer) { 
      $con = Conexao::connect();

      $id_plan = $ofer->getId_plan();
      $id_matriz = $ofer->getId_matriz();
      $qtd_sem = $ofer->getQtd_sem();
      $sem_ini = $ofer->getSem_ini();
      $turno = $ofer->getTurno();
      $numero = $ofer->getNumero();
      $sql = "INSERT INTO ofer (id_plan, id_matriz, qtd_sem, sem_ini, turno, numero) VALUES ('$id_plan', '$id_matriz', '$qtd_sem', '$sem_ini', '$turno', '$numero')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Ofer $ofer) { 
      $con = Conexao::connect();

      $id_plan = $ofer->getId_plan();
      $id_matriz = $ofer->getId_matriz();
      $qtd_sem = $ofer->getQtd_sem();
      $sem_ini = $ofer->getSem_ini();
      $turno = $ofer->getTurno();
      $numero = $ofer->getNumero();
      $sql = "UPDATE ofer SET id_plan = '$id_plan', id_matriz = '$id_matriz', qtd_sem = '$qtd_sem', sem_ini = '$sem_ini', turno = '$turno', numero = '$numero'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

      public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM ofer";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Ofer($i['id_plan'], $i['id_matriz'], $i['qtd_sem'], $i['sem_ini'], $i['turno'], $i['numero']));
         }
      }

      Conexao::close();
   }

}

require_once "Curso.php";
require_once "Conexao.php";
class CursoDAO {
   public static function insert (Curso $curso) { 
      $con = Conexao::connect();

      $nome = $curso->getNome();
      $id_mod = $curso->getId_mod();
      $sql = "INSERT INTO curso (nome, id_mod) VALUES ('$nome', '$id_mod')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Curso $curso) { 
      $con = Conexao::connect();

      $nome = $curso->getNome();
      $id_mod = $curso->getId_mod();
      $id_curso = $curso->getId_curso();
      $sql = "UPDATE curso SET nome = '$nome', id_mod = '$id_mod' WHERE id_curso = '$id_curso'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_curso) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM curso WHERE id_curso = '$id_curso'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM curso";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Curso($i['nome'], $i['id_mod'], $i['id_curso']));
         }
      }

      Conexao::close();
   }

}

require_once "Grupo.php";
require_once "Conexao.php";
class GrupoDAO {
   public static function insert (Grupo $grupo) { 
      $con = Conexao::connect();

      $nome = $grupo->getNome();
      $id_coordenador = $grupo->getId_coordenador();
      $sql = "INSERT INTO grupo (nome, id_coordenador) VALUES ('$nome', '$id_coordenador')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Grupo $grupo) { 
      $con = Conexao::connect();

      $nome = $grupo->getNome();
      $id_coordenador = $grupo->getId_coordenador();
      $id_grupo = $grupo->getId_grupo();
      $sql = "UPDATE grupo SET nome = '$nome', id_coordenador = '$id_coordenador' WHERE id_grupo = '$id_grupo'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_grupo) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM grupo WHERE id_grupo = '$id_grupo'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM grupo";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Grupo($i['nome'], $i['id_coordenador'], $i['id_grupo']));
         }
      }

      Conexao::close();
   }

}

require_once "Sem_plan.php";
require_once "Conexao.php";
class Sem_planDAO {
   public static function insert (Sem_plan $sem_plan) { 
      $con = Conexao::connect();

      $semestre = $sem_plan->getSemestre();
      $id_plan = $sem_plan->getId_plan();
      $sql = "INSERT INTO sem_plan (semestre, id_plan) VALUES ('$semestre', '$id_plan')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Sem_plan $sem_plan) { 
      $con = Conexao::connect();

      $semestre = $sem_plan->getSemestre();
      $id_plan = $sem_plan->getId_plan();
      $id_sem_plan = $sem_plan->getId_sem_plan();
      $sql = "UPDATE sem_plan SET semestre = '$semestre', id_plan = '$id_plan' WHERE id_sem_plan = '$id_sem_plan'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_sem_plan) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM sem_plan WHERE id_sem_plan = '$id_sem_plan'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM sem_plan";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Sem_plan($i['semestre'], $i['id_plan'], $i['id_sem_plan']));
         }
      }

      Conexao::close();
   }

}

require_once "Area.php";
require_once "Conexao.php";
class AreaDAO {
   public static function insert (Area $area) { 
      $con = Conexao::connect();

      $nome = $area->getNome();
      $id_subarea = $area->getId_subarea();
      $id_grupo = $area->getId_grupo();
      $sql = "INSERT INTO area (nome, id_subarea, id_grupo) VALUES ('$nome', '$id_subarea', '$id_grupo')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Area $area) { 
      $con = Conexao::connect();

      $nome = $area->getNome();
      $id_subarea = $area->getId_subarea();
      $id_grupo = $area->getId_grupo();
      $id_area = $area->getId_area();
      $sql = "UPDATE area SET nome = '$nome', id_subarea = '$id_subarea', id_grupo = '$id_grupo' WHERE id_area = '$id_area'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_area) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM area WHERE id_area = '$id_area'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM area";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Area($i['nome'], $i['id_subarea'], $i['id_grupo'], $i['id_area']));
         }
      }

      Conexao::close();
   }

}

require_once "Nucleo.php";
require_once "Conexao.php";
class NucleoDAO {
   public static function insert (Nucleo $nucleo) { 
      $con = Conexao::connect();

      $nome = $nucleo->getNome();
      $sql = "INSERT INTO nucleo (nome) VALUES ('$nome')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Nucleo $nucleo) { 
      $con = Conexao::connect();

      $nome = $nucleo->getNome();
      $id_nucleo = $nucleo->getId_nucleo();
      $sql = "UPDATE nucleo SET nome = '$nome' WHERE id_nucleo = '$id_nucleo'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_nucleo) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM nucleo WHERE id_nucleo = '$id_nucleo'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM nucleo";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Nucleo($i['nome'], $i['id_nucleo']));
         }
      }

      Conexao::close();
   }

}

require_once "Sem_com_cur.php";
require_once "Conexao.php";
class Sem_com_curDAO {
   public static function insert (Sem_com_cur $sem_com_cur) { 
      $con = Conexao::connect();

      $periodo = $sem_com_cur->getPeriodo();
      $creditos = $sem_com_cur->getCreditos();
      $id_com_cur = $sem_com_cur->getId_com_cur();
      $sql = "INSERT INTO sem_com_cur (periodo, creditos, id_com_cur) VALUES ('$periodo', '$creditos', '$id_com_cur')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Sem_com_cur $sem_com_cur) { 
      $con = Conexao::connect();

      $periodo = $sem_com_cur->getPeriodo();
      $creditos = $sem_com_cur->getCreditos();
      $id_com_cur = $sem_com_cur->getId_com_cur();
      $id_sem_com_cur = $sem_com_cur->getId_sem_com_cur();
      $sql = "UPDATE sem_com_cur SET periodo = '$periodo', creditos = '$creditos', id_com_cur = '$id_com_cur' WHERE id_sem_com_cur = '$id_sem_com_cur'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_sem_com_cur) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM sem_com_cur WHERE id_sem_com_cur = '$id_sem_com_cur'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM sem_com_cur";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Sem_com_cur($i['periodo'], $i['creditos'], $i['id_com_cur'], $i['id_sem_com_cur']));
         }
      }

      Conexao::close();
   }

}

require_once "Pro_grupo.php";
require_once "Conexao.php";
class Pro_grupoDAO {
   public static function insert (Pro_grupo $pro_grupo) { 
      $con = Conexao::connect();

      $id_pro = $pro_grupo->getId_pro();
      $id_grupo = $pro_grupo->getId_grupo();
      $sql = "INSERT INTO pro_grupo (id_pro, id_grupo) VALUES ('$id_pro', '$id_grupo')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Pro_grupo $pro_grupo) { 
      $con = Conexao::connect();

      $id_pro = $pro_grupo->getId_pro();
      $id_grupo = $pro_grupo->getId_grupo();
      $sql = "UPDATE pro_grupo SET id_pro = '$id_pro', id_grupo = '$id_grupo'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

      public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM pro_grupo";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Pro_grupo($i['id_pro'], $i['id_grupo']));
         }
      }

      Conexao::close();
   }

}

require_once "Turma.php";
require_once "Conexao.php";
class TurmaDAO {
   public static function insert (Turma $turma) { 
      $con = Conexao::connect();

      $nome = $turma->getNome();
      $turno = $turma->getTurno();
      $qtd_alunos = $turma->getQtd_alunos();
      $per_atual = $turma->getPer_atual();
      $id_matriz = $turma->getId_matriz();
      $id_sem_plan = $turma->getId_sem_plan();
      $sql = "INSERT INTO turma (nome, turno, qtd_alunos, per_atual, id_matriz, id_sem_plan) VALUES ('$nome', '$turno', '$qtd_alunos', '$per_atual', '$id_matriz', '$id_sem_plan')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Turma $turma) { 
      $con = Conexao::connect();

      $nome = $turma->getNome();
      $turno = $turma->getTurno();
      $qtd_alunos = $turma->getQtd_alunos();
      $per_atual = $turma->getPer_atual();
      $id_matriz = $turma->getId_matriz();
      $id_sem_plan = $turma->getId_sem_plan();
      $id_turma = $turma->getId_turma();
      $sql = "UPDATE turma SET nome = '$nome', turno = '$turno', qtd_alunos = '$qtd_alunos', per_atual = '$per_atual', id_matriz = '$id_matriz', id_sem_plan = '$id_sem_plan' WHERE id_turma = '$id_turma'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_turma) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM turma WHERE id_turma = '$id_turma'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM turma";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Turma($i['nome'], $i['turno'], $i['qtd_alunos'], $i['per_atual'], $i['id_matriz'], $i['id_sem_plan'], $i['id_turma']));
         }
      }

      Conexao::close();
   }

}

require_once "Matriz.php";
require_once "Conexao.php";
class MatrizDAO {
   public static function insert (Matriz $matriz) { 
      $con = Conexao::connect();

      $nome = $matriz->getNome();
      $ano = $matriz->getAno();
      $id_curso = $matriz->getId_curso();
      $sql = "INSERT INTO matriz (nome, ano, id_curso) VALUES ('$nome', '$ano', '$id_curso')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Matriz $matriz) { 
      $con = Conexao::connect();

      $nome = $matriz->getNome();
      $ano = $matriz->getAno();
      $id_curso = $matriz->getId_curso();
      $id_matriz = $matriz->getId_matriz();
      $sql = "UPDATE matriz SET nome = '$nome', ano = '$ano', id_curso = '$id_curso' WHERE id_matriz = '$id_matriz'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_matriz) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM matriz WHERE id_matriz = '$id_matriz'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM matriz";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Matriz($i['nome'], $i['ano'], $i['id_curso'], $i['id_matriz']));
         }
      }

      Conexao::close();
   }

}

require_once "Plan.php";
require_once "Conexao.php";
class PlanDAO {
   public static function insert (Plan $plan) { 
      $con = Conexao::connect();

      $nome = $plan->getNome();
      $dat_cri = $plan->getDat_cri();
      $dat_exe = $plan->getDat_exe();
      $id_pro = $plan->getId_pro();
      $sql = "INSERT INTO plan (nome, dat_cri, dat_exe, id_pro) VALUES ('$nome', '$dat_cri', '$dat_exe', '$id_pro')";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function update (Plan $plan) { 
      $con = Conexao::connect();

      $nome = $plan->getNome();
      $dat_cri = $plan->getDat_cri();
      $dat_exe = $plan->getDat_exe();
      $id_pro = $plan->getId_pro();
      $id_plan = $plan->getId_plan();
      $sql = "UPDATE plan SET nome = '$nome', dat_cri = '$dat_cri', dat_exe = '$dat_exe', id_pro = '$id_pro' WHERE id_plan = '$id_plan'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function delete ($id_plan) { 
      $con = Conexao::connect();

      $sql = "DELETE FROM plan WHERE id_plan = '$id_plan'";

      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 

      Conexao::close();
   }

   public static function getAll () { 
      $con = Conexao::connect();

      $sql = "SELECT * FROM plan";
      $resultado = mysqli_query($con, $sql);
      if(!$resultado) {echo mysqli_error ($con);} 
      else {
         $array = array();
         while ($i = mysqli_fetch_array($resultado)) {
            array_push($array, new Plan($i['nome'], $i['dat_cri'], $i['dat_exe'], $i['id_pro'], $i['id_plan']));
         }
      }

      Conexao::close();
   }

}

?>