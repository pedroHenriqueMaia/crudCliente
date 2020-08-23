<?php 

//conexao com o banco de dados
include_once 'php_action/conexao.php';
//header
include_once 'includes/header.php';
//mensagem
include_once 'includes/mensagem.php';
?>


<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light">Clientes</h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>CEP:</th>
					<th>E-mail:</th>
					<th>Data de Nascimento:</th>
					<th>Celular:</th>
					
				</tr>
			</thead>

			<tbody>
				<?php 
					$sql = "SELECT * FROM clientes";
					$result = mysqli_query($con, $sql);

					if(mysqli_num_rows($result) > 0):

					while($dados = mysqli_fetch_array($result)):
				?>

				<?php $nome 	 = $dados['nome'];
					  $CEP		 = $dados['CEP'];
					  $email     = $dados['email'];
					  $idade     = $dados['idade'];
					  $telefone     = $dados['telefone'];
					  $id 		 = $dados['id'];
					

					  $idade = mudarData($idade);
				?>
				<tr>
					<td><?php echo $nome; ?></td>
					<td><?php echo $CEP; ?></td>
					<td><?php echo $email; ?></td>
					<td><?php echo $idade; ?></td>
					<td><?php echo $telefone; ?></td>
				


					<td><a href="edit.php?id=<?php echo $dados['id'];?>" class="btn-floating deep-purple accent-4"><i class="material-icons">edit</i></a></td>


					<td><a href="#modal<?php echo $id;?>" class="btn-floating red accent-4 modal-trigger "><i class="material-icons">delete</i></a></td>

					<div id="modal<?php echo $id;?>" class="modal">
					    <div class="modal-content">
					      <h4>Opa!</h4>
					      <p>Tem certeza que deseja excluir esse cliente?</p>
					    </div>
					    <div class="modal-footer">
					      <form action="php_action/delete.php" method="POST">
					      	<input type="hidden" name="id" value="<?php echo $id; ?>">

					      	<button type="submit" name="btn-deletar" class="btn red accent-4">Sim, quero deletar</button>

					      	<a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
					      </form>
					    </div>
					  </div>

				</tr>
				<?php 
					endwhile;
					else: ?>
						<tr>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
							<td>-</td>
						</tr>
				<?php
					endif; ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn deep-purple accent-4">Adicionar cliente</a>
	</div>
</div>


<?php 
//footer
include_once 'includes/footer.php';
?>



