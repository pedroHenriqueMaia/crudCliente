<?php
//iniciando a sessao
session_start();
//conexao com o banco
require_once "conexao.php";

if(isset($_POST['btn-editar'])):
	$nome = mysqli_escape_string($con, $_POST['nome']);
	$CEP = mysqli_escape_string($con, $_POST['CEP']);
	$email = mysqli_escape_string($con, $_POST['email']);
	$idade = mysqli_escape_string($con, $_POST['idade']);
	$telefone = mysqli_escape_string($con, $_POST['telefone']);

	$id = mysqli_escape_string($con, $_POST['id']);

	$sql = "UPDATE clientes SET  nome = '$nome', CEP = '$CEP', email = '$email', idade = '$idade', telefone = '$telefone'WHERE id='$id'";	
	
	if(mysqli_query($con, $sql)):
	$_SESSION['mensagem'] = "Atualizado com Sucesso";
	header('Location: ../index.php');
else:
	$_SESSION['mensagem'] = "Erro ao Atualizado ";
	header('Location: ../index.php');
	endif;
endif;