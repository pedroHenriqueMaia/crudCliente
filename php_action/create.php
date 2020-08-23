<?php
//iniciando a sessao
session_start();
//conexao com o banco
require_once "conexao.php";

if(isset($_POST['btn-cadastrar'])):
	$nome = mysqli_escape_string($con, $_POST['nome']);
	$CEP = mysqli_escape_string($con, $_POST['CEP']);
	$email = mysqli_escape_string($con, $_POST['email']);
	$idade = mysqli_escape_string($con, $_POST['idade']);
	$telefone = mysqli_escape_string($con, $_POST['telefone']);

	$sql = "INSERT INTO clientes (nome, CEP, email, idade, telefone) VALUES ('$nome', '$CEP', '$email', '$idade', '$telefone')";
	
if(mysqli_query($con, $sql)):
	$_SESSION['mensagem'] = "Cadastrado com Sucesso";
	header('Location: ../index.php');
else:
	$_SESSION['mensagem'] = "Erro ao Cadastrar";
	header('Location: ../index.php');
	endif;
endif;