<?php
header("Content-Type: text/html; charset=utf-8");

require("../testLogin.php");

if(!isset($_POST['nome'])) {
	echo 'Parâmetros inválidos.';
	exit;
} elseif(!$_POST['nome']) {
	echo 'Digite um nome.';
	exit;
} else {		
	$nome = utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['nome'])));
	
	$query = "INSERT INTO Reagentes_Fabricante (nome) VALUES ('$nome')";
	$result = mysqli_query($dbc, $query)
		or die(mysqli_error($query));

	echo 'OK';
	exit;
}
?>