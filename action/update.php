<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar'])){
    $nome = mysqli_escape_string($connect,$_POST['NOME']);
    $cep = mysqli_escape_string($connect,$_POST['CEP']);
    $cidade =mysqli_escape_string($connect,$_POST['CIDADE']);
    $uf = mysqli_escape_string($connect,$_POST['UF']);
    $bairro = mysqli_escape_string($connect,$_POST['BAIRRO']);
    $endereco =mysqli_escape_string($connect,$_POST['ENDERECO']);
    $numero = mysqli_escape_string($connect,$_POST['TELEFONE']);

	$id = mysqli_escape_string($connect, $_POST['id']);

	$sql = "UPDATE clientes SET NOME = '$nome', CEP = '$cep', CIDADE = '$cidade', UF = '$uf',BAIRRO ='$bairro',ENDERECO='$endereco',TELEFONE   ='$numero' WHERE id = '$id'";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
}