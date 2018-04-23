<?php
    /**
     * 
     */
    class ProdutoCodEanModel{
        
        function __construct($argument) {
            
        }
    	function GerarCodEan($codProd){
    		$result = ProdutoCodEanDAO::InserirCodEan($codProd, $codBarras);
			return $result;
    	}
	}
    
?>