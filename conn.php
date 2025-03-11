<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$basename = "protetor";

	// Url do site
	$site['url'] = 'http://localhost:8004/';

	

	global $site;

	$conn = mysqli_connect($servidor, $usuario, $senha, $basename);

	mysqli_set_charset($conn, 'utf8');
	date_default_timezone_set("America/Sao_Paulo");
	setlocale(LC_ALL, 'pt_BR');
?>