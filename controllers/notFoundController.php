<?php
// Class notFoundController com extend de Controller.
class notFoundController extends Controller {
    // Define $arrayInfo como private.
    private $arrayInfo;

    // Inicia construct.
    public function __construct() {
        // Adiciona em arrayInfo informações.
        $this->arrayInfo = array();
    }

	public function index() {

		// loadTemplate -> pode ser passado até 3 variaveis.
        // 1º é o nome do arquivo a ser puxado.
        // 2º passa arrayInfo com as informações.
        // 3º opcional, se o arquivo estiver em uma pasta em views nessa variavel você informa o nome da pasta.
		$this->loadTemplate('index', $this->arrayInfo, '404');
	}
}
?>