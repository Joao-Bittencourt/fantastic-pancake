<head>
      <meta charset="utf-8">
      
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

     <!-- -Let browser know website is optimized for mobile -->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Novo </h3>
		<form action="action/create.php" method="POST">
			<div >
				<label for="nome">Nome</label>
				<input type="text" name="nome" id="nome"placeholder="digite seu nome" >
			</div>

			<div>
				<label for="cep">Cep</label>
				<input type="text" name="cep" id="cep" placeholder="00000000" >
			</div>

			<div>
				<label for="cidade">Cidade</label>
				<input type="text"name="cidade" id="cidade" placeholder="digite sua cidade" >
			</div>

			<div>
				<label for="uf">UF</label>
				<input type="text" name="uf" id="uf" placeholder="UF"  >
			</div>
			<div>
				<label for="bairro">Bairro</label>
				<input type="text" name="bairro"id="bairro" placeholder="digite seu bairro" >
			</div>

			<div >
				<label for="endereco">Endereço</label>
				<input type="text"name="endereco" id="endereco" placeholder="digite seu endereço">			
			</div>

			<div >
				<label for="numero">Telefone</label>
				<input type="text" name="numero" id="numero" placeholder="(00)00000-0000" >
				
			</div>

			<button type="submit" name="btn-cadastrar" class="btn"> Cadastrar </button>
			<a href="index.php" class="btn green">Lista</a>
		</form>
		
	</div>
</div>

