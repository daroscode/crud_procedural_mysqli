<?php  

// Conexão com banco de dados
include "connect.php";

// Setando as variáveis que serão usadas no script
$student        = '';
$email  	    = '';
$course  	    = '';
$town 		    = '';
$title    	    = '';
$search         = '';
$stmnt 		    = '';
$result 	    = array();
$actual_link    = '';
$url_now	    = '';
$result_courses = array();

// Identificar URL atual para verificar qual menu é ativo e filtrar a tabela de pesquisa
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; 
$actual_link = explode('/', $actual_link);
$url_now = substr($actual_link[3], 0, -4);

// CREATE
if (isset($_POST['btnSalvarAluno'])) {
	$student = $_POST['student'];
	$email   = $_POST['email'];
	$course  = $_POST['course'];
	$town 	 = $_POST['town'];
	$stmnt = "INSERT INTO alunos SET nome = '$student', email = '$email', fk_curso = $course, fk_cidade = $town";
	mysqli_query($obj_mysqli, $stmnt);
	header("Location: alunos.php");
}

if (isset($_POST['btnSalvarCurso'])) {
	$title = $_POST['title'];
	$stmnt = "INSERT INTO cursos SET nome = '$title'";
	mysqli_query($obj_mysqli, $stmnt);
	header("Location: cursos.php");
}

// READ

// PESQUISA
if (isset($_POST['btnPesquisa']) && $_POST['termo'] !== '') {
	$search = $_POST['termo'];
	$stmnt = "SELECT * FROM $url_now WHERE nome LIKE '%$search%'";
	$result = mysqli_query($obj_mysqli, $stmnt);
} else {
	$stmnt 	= '';
	$result = array();
	$stmnt = "SELECT * FROM $url_now";
	$result = mysqli_query($obj_mysqli, $stmnt);
}

// LISTA CURSOS
$stmnt 	= '';
$result_courses = array();
$stmnt = "SELECT * FROM cursos";
$result_courses = mysqli_query($obj_mysqli, $stmnt);

// LISTA CIDADES
$stmnt 	= '';
$result_cities = array();
$stmnt = "SELECT * FROM cidades";
$result_cities = mysqli_query($obj_mysqli, $stmnt);

// LISTAR DADOS ALUNO SELECIONADO
if (isset($_GET['aluno'])) {
	$stmnt 	= '';
	$result_student = array();
	$stmnt = "SELECT * FROM alunos WHERE pk_aluno = " . $_GET['aluno'];	
	$result_student = mysqli_query($obj_mysqli, $stmnt);
}

// LISTAR DADOS CURSO SELECIONADO
if (isset($_GET['curso'])) {
	$stmnt 	= '';
	$result_student = array();
	$stmnt = "SELECT * FROM cursos WHERE pk_curso = " . $_GET['curso'];	
	$result_course = mysqli_query($obj_mysqli, $stmnt);
}

// UPDATE
if (isset($_POST['btnAtualizarAluno']) && isset($_GET['aluno'])) {
	$student = $_POST['student'];
	$email   = $_POST['email'];
	$course  = $_POST['course'];
	$town 	 = $_POST['town'];
	$stmnt = "UPDATE alunos SET nome = '$student', email = '$email', fk_curso = $course, fk_cidade = $town WHERE pk_aluno = " . $_GET['aluno'];
	mysqli_query($obj_mysqli, $stmnt);
	header("Location: alunos.php");
}

if (isset($_POST['btnAtualizarCurso']) && isset($_GET['curso'])) {
	$title = $_POST['title'];
	$stmnt = "UPDATE cursos SET nome = '$title' WHERE pk_curso = " . $_GET['curso'];
	mysqli_query($obj_mysqli, $stmnt);
	header("Location: cursos.php");
}

// DELETE
if (isset($_POST['btnDeletarAluno']) && isset($_GET['aluno'])) {
	$stmnt = "DELETE FROM alunos WHERE pk_aluno = " . $_GET['aluno'];
	mysqli_query($obj_mysqli, $stmnt);
	header("Location: alunos.php");
}

if (isset($_POST['btnDeletarCurso']) && isset($_GET['curso'])) {
	$stmnt = "DELETE FROM cursos WHERE pk_curso = " . $_GET['curso'];
	mysqli_query($obj_mysqli, $stmnt);
	header("Location: cursos.php");
}

?>