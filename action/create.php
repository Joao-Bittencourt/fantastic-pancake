<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

if(isset($_POST['btn-cadastrar'])):
	$nome = clear($_POST['nome']);
	$cep = clear($_POST['cep']);
	$cidade = clear($_POST['cidade']);
	$uf = clear($_POST['uf']);
	$bairro = clear($_POST['bairro']);
	$endereco = clear($_POST['endereco']);
	$numero = clear($_POST['numero']);

	$sql = "INSERT INTO clientes (NOME, ENDERECO, CEP, BAIRRO, CIDADE, UF, TELEFONE) VALUES ('$nome','$endereco','$cep','$bairro','$cidade','$uf','$numero')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;