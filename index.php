<?php
// Conexão
include_once 'action/db_connect.php';
?>
 <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <title>cadastro</title>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

     
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
	

<div class="row">
	<div class="col s12 m8 push-m2">
		<h3 class="light"> Clientes </h3>
		<table class="striped">
			<thead>
				<tr>
					<th>Nome:</th>
					<th>Cep:</th>
					<th>Cidade</th>
					<th>UF:</th>
					<th>Bairro:</th>
					<th>Endereço:</th>
					<th>Numero</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$sql = "SELECT * FROM clientes";
				$resultado = mysqli_query($connect, $sql);
               
                if(mysqli_num_rows($resultado) > 0):

				while($dados = mysqli_fetch_array($resultado)):
				?>
				<tr>
					<td><?php echo $dados['NOME']; ?></td>
					<td><?php echo $dados['CEP']; ?></td>
					<td><?php echo $dados['CIDADE']; ?></td>
					<td><?php echo $dados['UF']; ?></td>
					<td><?php echo $dados['BAIRRO']; ?></td>
					<td><?php echo $dados['ENDERECO']; ?></td><td><?php echo $dados['TELEFONE']; ?></td>
					<td><a href="editar.php?id=<?php echo $dados['ID']; ?>" class="btn-floating orange"><i class="material-icons">edit</i></a></td>

					<td><a href="action/delete.php?id=<?php echo $dados['ID']; ?>	" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

						
		<!-- https://github.com/guibittenc/fantastic-pancake.git -->

				</tr>
			   <?php 
				endwhile;
				else: ?>

				<tr>
					<td>-</td>
					<td>-</td>
					<td>-</td>
					<td>-</td>
				</tr>

			   <?php 
				endif;
			   ?>

			</tbody>
		</table>
		<br>
		<a href="adicionar.php" class="btn">Adicionar</a>
	</div>
</div>



