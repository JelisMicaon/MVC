<?php
// Inicia a SESSION.
session_start();

// Inclui os arquivos necessarios.
require 'config.php';
require 'models'.D_S.'PHPMailer'.D_S.'PHPMailerAutoload.php';

// Carrega as classes
spl_autoload_register(function ($class){
	// Verifica se existe o arquivo pedido em $class.
    if(file_exists('controllers'.D_S.$class.'.php')) {
            require_once 'controllers'.D_S.$class.'.php';
    } elseif(file_exists('models'.D_S.$class.'.php')) {
            require_once 'models'.D_S.$class.'.php';
    } elseif(file_exists('core'.D_S.$class.'.php')) {
            require_once 'core'.D_S.$class.'.php';
    }
});

// Inicia a class Core.
$core = new Core();
// Inicia a function run de Core.
$core->run();
?>