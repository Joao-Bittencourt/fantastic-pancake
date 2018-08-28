<?php
// Conexão
include_once 'action/db_connect.php';

// Select
if(isset($_GET['id'])):
	$id = mysqli_escape_string($connect, $_GET['id']);

	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = mysqli_query($connect, $sql);
	$dados = mysqli_fetch_array($resultado);
endif;
?>
<head>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

     <!-- -Let browser know website is optimized for mobile -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/></head>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Editar</h3>
		<form action="action/update.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $dados['ID'];?>">
			<div >
				<label for="NOME">Nome</label>
				<input type="text" name="NOME" id="NOME" value="<?php echo $dados['NOME'];?>">
				
			</div>

			<div >
			<label for="CEP">Cep</label>
			<input type="text" name="CEP" value="<?php echo $dados['CEP'];?>" id="CEP">
				
			</div>

			<div >
				<label for="CIDADE">Cidade</label>
				<input type="text" value="<?php echo $dados['CIDADE'];?>" name="CIDADE" id="CIDADE">
				
			</div>

			<div >
				<label for="UF">UF</label>
				<input type="text" value="<?php echo $dados['UF'];?>" name="UF" id="UF">
				
			</div>	
			<div >
				<label for="BAIRRO">Bairro</label>
				<input type="text" value="<?php echo $dados['BAIRRO'];?>" name="BAIRRO" id="BAIRRO">
				
			</div>
			<div >
				<label for="ENDERECO">Endereço</label>
				<input type="text" value="<?php echo $dados['ENDERECO'];?>" name="ENDERECO" id="ENDERECO">
				
			</div>
			<div >
				<label for="TELEFONE">Telefone</label>
				<input type="text" value="<?php echo $dados['TELEFONE'];?>" name="TELEFONE" id="TELEFONE">
				
			</div>

			<button type="submit" name="btn-editar" class="btn"> Atualizar</button>
			<a href="index.php" class="btn green"> Lista </a>
		</form>
		
	</div>
</div>
