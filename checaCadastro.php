<?php
session_start();
if ($_SESSION['logou'] == 1) {
	// include_once('menu.php');
	$servidor = mysqli_connect("localhost", "root", "", "veiculos");
	$placa = $_POST['placa'];
	$marca = $_POST['marca'];
	$anoFabricacao = $_POST['anoFabricacao'];
	$anoModelo = $_POST['anoModelo'];
	$categoria = $_POST['categoria'];
	// data e hora
	date_default_timezone_set('America/Sao_Paulo');
	$dataAtual = date('Y-m-d H:i:s');
	// $horaAtual = date('h:i:s');
	$cadastrou = mysqli_query($servidor, "insert into cadastro (placa, marca, anoFabricacao, anoModelo, categoria, dataCadastro) values ('$placa','$marca','$anoFabricacao','$anoModelo','$categoria','$dataAtual')");
	if ($cadastrou) {
		// relatorio de cadastro de usuario
		$loginafetado = $_SESSION['login'];
		// echo "login utilizado: $loginafetado <br>";
		mysqli_query($servidor, "insert into relatoriocadastroveiculo (placaafetada, datacriacao, loginafetado) values ('$placa','$dataAtual', '$loginafetado')");
		echo "Cadastro realizado com sucesso!";
		header('Location: principal.php');
	} else {
		echo "Deu merda!";
		echo "data" . date('d/m/Y');
		echo "hora" . date('h:i:s');
	}
} else {
	header('Location: index.php');
}
?>