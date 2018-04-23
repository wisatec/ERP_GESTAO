<?php

/**
 * 
 */
class ProdutoPrecoDAO extends Conexao {
	
	function __construct($argument) {
		
	}
	static function ObterPorcentagemDAO($idTabela)
	{
		$sql =  "SELECT tt.PercentLucro FROM TipoTabela tt WHERE tt.idTabela = ".$idTabela;
		$result = self::sqlSelectOne($sql);
		return $result;
	}

}

    
?>