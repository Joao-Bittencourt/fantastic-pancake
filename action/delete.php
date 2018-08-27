<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';



$id = $_GET['id'];

$result = mysqli_query($connect, "DELETE FROM clientes WHERE ID=$id");
header("Location:../index.php");
