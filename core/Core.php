<?php
// Class Core.
class Core {

	// function que ira .
	public function run() {
		// define a $url / se $_GET['url'] não existir, se existir define como /xxxxx.
        $url = D_S.(isset($_GET['url'])?$_GET['url']:'');

        // define $params como array vazia para efitar problemas.
		$params = array();
		// verifica se $url não está vazia & se ela é diferente de /
		// caso $url estiver vazia ou com apenas / dentro dela.
		// define $currentController como 'homeController' e $currentAction como 'index'.
		if(!empty($url) && $url != D_S) {
			// da um explode em $url
			$url = explode(D_S, $url);
			// elimina oque tiver depois de /
			array_shift($url);

			// define $currentController o caminho do controller.
			$currentController = $url[0].'controller';
			// elimina oque tiver depois de /
			array_shift($url);

			// verifica se $url não está vazia & se ela é diferente de /
			// caso $url estiver vazia ou com apenas / dentro dela define $currentAction como 'index'.
			if(isset($url[0]) && $url[0] != D_S) {
				// define $currentAction como a variavel 0 de url.
				$currentAction = $url[0];
				// elimina oque tiver depois de /
				array_shift($url);
			} else {
				$currentAction = 'index';
			}

			// conta quantas variaveis tem dentro de $url.
			if(count($url) > 0) {
				// define $params como $url.
				$params = $url;
			}

		} else {
			$currentController = 'homeController';
			$currentAction = 'index';
		}

		// verifica se não existe o arquivo passado em $currentController.
		// se não existir retorna $currentController como 'notFoundController' (Controller de erro 404).
		// e $currentAction como 'index'.
		if(!file_exists('controllers'.D_S.$currentController.'.php')) {
			$currentController = 'notFoundController';
			$currentAction = 'index';
		}

		// inicia a class que está passando em $currentController.
		// que pode ser a 'homeController' ou qualquer outro controller.
		$c = new $currentController();

		// se retornar false define $currentAction como 'index'
		if(!method_exists($c, $currentAction)) {
			$currentAction = 'index';
		}

		// Chama a função com os parametros passados
		call_user_func_array(array($c, $currentAction), $params);
	}

}
?>