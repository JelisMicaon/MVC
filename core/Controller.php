<?php
// Class Controller
class Controller {

	// function loadTemplate serve para puxar o template (corpo da pagina) e junto passa 2 ou 3 variaveis.
	// $viewFile só existe se for setada no controller, se existir significa que o arquivo está em uma pasta.
	public function loadTemplate($viewName, $viewData = array(), $viewFile = false) {
		// puxa o arquivo.
		require 'views'.D_S.'template.php';
	}

	// function loadView é puxada dentro do template MAS SOMENTE SE $viewFile FOI definida em loadTemplate.
	public function loadView($viewName, $viewData = array(), $viewFile) {
		// Extrai o array em variaveis.
		extract($viewData);
		// puxa o arquivo.
		require 'views'.D_S.$viewFile.D_S.$viewName.'.php';
	}

	// function loadViewInTemplate é puxada dentro do template MAS SOMENTE SE $viewFile NÃO foi definida em loadTemplate.
	public function loadViewInTemplate($viewName, $viewData = array()) {
		// Extrai o array em variaveis.
		extract($viewData);
		// puxa o arquivo.
		require 'views'.D_S.$viewName.'.php';
	}

}
?>