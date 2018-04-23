<?php
    /**
     * 
     */
    class ProdutoPrecoModel {
        
        function __construct($argument) {
            
        }
		function ObterPorcentagem($idTabela){
			$result = ProdutoPrecoDAO::ObterPorcentagemDAO($idTabela);
			return $result;
		}
    }
    
?>