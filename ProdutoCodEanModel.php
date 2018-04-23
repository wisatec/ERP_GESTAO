<?php
    /**
     * 
     */
    class ProdutoCodEanModel{
        
        function __construct($argument) {
            
        }
    	function GerarCodEan($codProd){
    		$util = new Utilitarios();
			$codBarras = $util->GerarCodBarrasEAN13();
    		$result = ProdutoCodEanDAO::InserirCodEan($codProd, $codBarras);
			return $codBarras;
    	}
	}
    
?>