<?php

/**
 * 
 */
class ProdutoPrecoDAO extends Conexao {
	
	function __construct($argument) {
		
	}
	static function ObterPorcentagemDAO($idTabela)
	{
		$sql =  "";
		$result = self::sqlSelectOne($sql);
		return $result;
	}

}

    
?>