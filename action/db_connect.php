<?php
// Conexão com banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$bd ="crud";

$connect = mysqli_connect($servername, $username, $password, $bd);
mysqli_set_charset($connect, "utf8");

if(mysqli_connect_error()):
	echo "Erro na conexão: ".mysqli_connect_error();
endif;


