<?php
    /**
     * 
     */
    class ProdutoCodEanDAO extends Conexao {
        
        function __construct($argument) {
            
        }
    	static function InserirCodEan($codProd,$codBarras){
    		$sql = "INSERT INTO ProdutoCodEan(CodEan,IdProduto)VALUES('".$codBarras."',".$codProd.")";
			$result  = self::sqlExec($sql);
			self::close();
			return $result;
    	}
	}
    
?>