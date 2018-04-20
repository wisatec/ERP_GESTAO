<?php
    /**
     * 
     */
    class ProdutoDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function ObterDescrNCM($codNcm){
			$sql = "SELECT n.DescrNcm AS DESCRICAO FROM Ncm n WHERE n.CodNcm = '".$codNcm."'";
			$result = self::sqlSelectOne($sql);
			return $result;			
		}
    }
    
?>