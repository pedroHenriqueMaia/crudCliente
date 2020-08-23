<?php 
include_once 'php_action/conexao.php';
//header
include_once 'includes/header.php';

if(isset($_GET['id'])):
	$id = mysqli_escape_string($con, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id= '$id'";
	$result = mysqli_query($con, $sql);
	$dados = mysqli_fetch_array($result);
endif;
?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Editar Cliente</h3>
	
		<form action="php_action/update.php" id="cadastro" name="cadastro " method="POST">
			
			<input type="hidden" value="<?php echo $dados['id']; ?>" name="id">

			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" value="<?php echo $dados['nome']; ?>" placeholder="Nome">
				<label for="nome"></label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="CEP" id="CEP" value="<?php echo $dados['CEP']; ?>" placeholder="CEP">
				<label for="CEP"></label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="email" id="email" value="<?php echo $dados['email']; ?>" placeholder="E-mail">
				<label for="email"></label>
			</div>

			<div class="input-field col s12">
				<input type="date" name="idade" id="idade" value="<?php echo $dados['idade']; ?>">
				<label for="idade">Data de Nascimento</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="telefone" id="telefone" value="<?php echo $dados['telefone']; ?>">
				<label for="telefone">Celular</label>
			</div>

	

			<button type="submit" name="btn-editar" class="btn blue darken-4">Atualizar</button>
			<a href="index.php" type="submit" class="btn deep-purple accent-4">Lista de Clientes</a>

		</form>

	</div>
</div>


<?php 
//footer
include_once 'includes/footer.php';
?>
