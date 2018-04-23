<?php
    /**
     * 
     */
    class ProdutoModel {
        
        function __construct($argument) {
            
        }
		function ObterDescricaoNcm($codNcm){
			$result = ProdutoDAO::ObterDescrNCM($codNcm);
			return $result;
		}
	}
    
?>