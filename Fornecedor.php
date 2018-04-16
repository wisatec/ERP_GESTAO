<?php
    
    /**
     * 
     */
    class Fornecedor extends Conexao{
        
        function __construct($argument) {
        	
			            
        }
    
		public function PrsquisaCnpj($value)
		{
			$sql = "SELECT f.Cnpj FROM Fornecedor f WHERE f.Cnpj LIKE '".$value."'";
			$result = 	self::sqlSelectCount($Sql);
			return $result;
		}
	}
    
	
?>