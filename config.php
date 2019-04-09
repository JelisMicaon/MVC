<?php
// Puxa o arquivo em que diz se está em modo de teste ou produção.
require 'environment.php';
// Define $db como global, que é a conexão com o Banco de Dados.
global $db;

// BASE_URL -> URL base.
define("BASE_URL", "xxxxxx");
// TITLE_WEB -> Titulo do Site.
define("TITLE_WEB", "xxxxxx");
// D_S = DIRECTORY_SEPARATOR -> Utiliza / se for Windowns e \ se for LINUX.
// É usada em todos os arquivo onde ira colocar um caminho de pasta, assim o sistema fica compativel comWindowns e LINUX.
define("D_S", DIRECTORY_SEPARATOR);

$config = array();
// Verifica se está em modo de teste ou produção.
if(ENVIRONMENT == 'development') {
	$config['dbname']  = 'xxxxxx';
	$config['host']    = 'xxxxxx';
	$config['dbuser']  = 'xxxxxx';
	$config['dbpass']  = 'xxxxxx';
} else {
	$config['dbname']  = 'xxxxxx';
	$config['host']    = 'xxxxxx';
	$config['dbuser']  = 'xxxxxx';
	$config['dbpass']  = 'xxxxxx';
}

// Tenta a conexão com o Banco de Dados.
try {
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch(PDOException $e) {
	echo "ERRO: ".$e->getMessage();
	exit;
}
?>