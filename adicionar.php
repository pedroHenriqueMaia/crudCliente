<?php 
//header
include_once 'includes/header.php';
?>


<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light">Novo Cliente</h3>
	
		<form action="php_action/create.php" id="cadastro" name="cadastro" method="POST">

			<div class="input-field col s12">
				<input type="text" name="nome" id="nome" placeholder="Nome">
				<label for="nome"></label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="CEP" id="CEP" placeholder="CEP">
				<label for="CEP"></label>
			</div>

			<div class="input-field col s12">
				<input type="email" name="email" id="email" placeholder="E-mail">
				<label for="email"></label>
			</div>

			<div class="input-field col s12">
				<input type="date" name="idade" id="idade" >
				<label for="idade">Data de Nascimento</label>
			</div>

				<div class="input-field col s12">
				<input type="text" name="telefone" id="telefone" >
				<label for="telefone">Celular</label>
			</div>

			<button type="submit" name="btn-cadastrar" class="btn blue darken-4">Cadastrar</button>
			<a href="index.php" type="submit" class="btn deep-purple accent-4">Lista de Clientes</a>

		</form>

	</div>
</div>


<?php 
//footer
include_once 'includes/footer.php';
?>
