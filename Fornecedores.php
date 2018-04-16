<?php
    /**
     * 
     */
    class Fornecedores extends Conexao {
        
        function __construct($argument) {
            
        }
		function PesquisaCnpj($value) {
			$sql = "SELECT f.Cnpj FROM Fornecedor f WHERE f.Cnpj LIKE '".$value."'";
			$result = self::sqlSelectCount($sql);
			return $result;
		}
		
		function PesquisaCnpjUpdate($value,$id){
			$sql = "SELECT  f.Cnpj FROM Fornecedor f WHERE f.Cnpj LIKE '".$value."' and f.idfornecedor != ".$id;
			$result = self::sqlSelectCount($sql);
			return $result;
				
		}	
			
    }
    
?>