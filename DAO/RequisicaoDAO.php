<?php
    /**
     * 
     */
    class RequisicaoDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function ObterDescrEmpresaDAO($cod){
			$sql =  "SELECT e.Razao FROM Empresa e WHERE e.IdEmpresa = ".$cod;				
			$result = self::sqlSelectOne($sql);
			return $result;
		}
		static function ObterDescrFornecedorDAO($cod){
			$sql =  "SELECT f.Razao FROM Fornecedor f WHERE f.IdFornecedor = ".$cod;				
			$result = self::sqlSelectOne($sql);
			return $result;
		}		
    }
    
?>