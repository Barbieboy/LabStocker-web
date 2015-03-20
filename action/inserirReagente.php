<?php
header("Content-Type: text/html; charset=utf-8");

require("../testLogin.php");

if(!isset($_POST['nome']) || !isset($_POST['classificacao']) || !isset($_POST['formula']) || !isset($_POST['fabricante']) || !isset($_POST['quantidade']) || !isset($_POST['unidadeQuantidade'])|| !isset($_POST['codigo']) || !isset($_POST['dadosAdicionais'])) {
	echo 'Parâmetros inválidos.';
	exit;
} elseif(!$_POST['nome'] || !$_POST['classificacao'] || !$_POST['fabricante']) {
	echo 'Preencha todos os campos corretamente.';
	exit;
} else {	
	$nome = utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['nome'])));
	$classificacao = utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['classificacao'])));
	$formula = utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['formula'])));
	$fabricante = utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['fabricante'])));
	$quantidade = utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['quantidade'])));
	$unidadeQuantidade = utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['unidadeQuantidade'])));
	$codigo = (int)utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['codigo'])));
	$dadosAdicionais = utf8_decode(mysqli_real_escape_string($dbc, strip_tags($_POST['dadosAdicionais'])));
	
	$query = "INSERT INTO Reagentes (nome, classificacao, formula, fabricante, quantidade, unidadeQuantidade, codigo, dadosAdicionais) VALUES ('$nome', '$classificacao', '$formula', '$fabricante', '$quantidade', '$unidadeQuantidade', '$codigo', '$dadosAdicionais')";
	$result = mysqli_query($dbc, $query)
		or die(mysqli_error($dbc));

	echo 'OK';
	exit;
}
?>