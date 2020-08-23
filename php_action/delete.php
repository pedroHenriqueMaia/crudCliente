<?php
//iniciando a sessao
session_start();
//conexao com o banco
require_once "conexao.php";

if(isset($_POST['btn-deletar'])):
	$id = mysqli_escape_string($con, $_POST['id']);

	$sql = "DELETE FROM clientes WHERE id = '$id'";	
	
	if(mysqli_query($con, $sql)):
	$_SESSION['mensagem'] = "Deletado com Sucesso";
	header('Location: ../index.php');
else:
	$_SESSION['mensagem'] = "Erro ao deletar";
	header('Location: ../index.php');
	endif;
endif;