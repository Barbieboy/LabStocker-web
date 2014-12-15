<?php
if(!isset($_SESSION)) {
	session_start();
}
if(!isset($_SESSION['AdminID'])) {
	session_destroy();
	header("Location: ./?forbidden");
	exit;
} else {
	require('dbconnect.php');

	$iduser = $_SESSION['AdminID'];
	$query = "SELECT * FROM Usuario WHERE idUsuario = $iduser LIMIT 1";
	$result = mysqli_query($dbc, $query);
	$row = mysqli_fetch_assoc($result);
	
	$loginUser = $row['login'];
	$nomeUser = $row['nome'];
    $nivelUser = $row['nivelAcesso'];
}
?>