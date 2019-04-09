<?php
// Inicia a class
class Exemplo extends Model {

	// Ira retornar todos os resultados da tabela indicada em um array.
	public function GetAll() {
		// Inicia o array para caso não volte resultado não de erro.
        $array = array();

        // Comando que será executado SQL.
        $sql = "SELECT * FROM xxxxxx ORDER BY id DESC";
        // Executa a pesquisa.
        $sql = $this->db->query($sql);
        
        // Verifica se houve algum resultado.
        if($sql->rowCount() > 0) {
        	// Joga todo o resultado dentro da variavel.
            $array = $sql->fetchAll(\PDO::FETCH_ASSOC);
        }
        
        // Retorna a variavel com ou sem conteudo.
        return $array;
	}

}
?>