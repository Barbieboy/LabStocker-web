<?php
header("Content-Type: text/html; charset=utf-8");

if(!isset($_POST['login']) || !isset($_POST['password'])) {
	echo 'Parâmetros inválidos.';
	exit;
} elseif(!$_POST['login']) {
	echo 'Digite um nome de usuário.';
	exit;
} elseif(!$_POST['password']) {
	echo 'Digite uma senha.';
	exit;
} else {	
	require_once('dbconnect.php');
	
	$login = mysqli_real_escape_string($dbc, strip_tags($_POST['login']));
	$password = md5((mysqli_real_escape_string($dbc, strip_tags($_POST['password']))));
	
	$query = "SELECT * FROM Usuario WHERE login = '$login' AND password = '$password' LIMIT 1";		
	$result = mysqli_query($dbc, $query);
		
	if(mysqli_num_rows($result) != 1) {
		echo 'Usuário ou senha inválido.';
		exit;
	} else {
		$row = mysqli_fetch_assoc($result);		
		$id = $row['idUsuario'];
		
		if(!isset($_SESSION)) {
			session_start();
		}
		
		$_SESSION['AdminID'] = $id;
		
		header("Location: admin.php");
		exit;
	}
}
?>