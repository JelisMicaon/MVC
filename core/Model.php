<?php
// Class Model
class Model {

	// Define $db como variavel protected.
	protected $db;

	// inicia o construtct
	public function __construct() {
		// Inicia a global $db.
		global $db;
		// Define $db protected.
		$this->db = $db;
	}

}
?>