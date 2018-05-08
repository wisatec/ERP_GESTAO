<?php
    /**
     * 
     */
    class EmpresaDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function ObterDescrNomeFantasiaDAO($cod){
			$sql = "SELECT e.Fantasia FROM Empresa e WHERE e.IdEmpresa = ".$cod;
			$rs = self::sqlSelectOne($sql);
			return $rs;
		}
    }
    
?>