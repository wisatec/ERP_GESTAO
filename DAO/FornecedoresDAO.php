<?php
    /**
     * 
     */
    class FornecedoresDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		function PesquisaCnpjDAO($cnpj){
			$sql = "SELECT f.Cnpj FROM Fornecedor f WHERE f.Cnpj LIKE '".$cnpj."'";
			$result = self::sqlSelectCount($sql);
			return $result;			
		}
		function PesquisaCnpjUpdateDAO($cnpj,$id){
			$sql = "SELECT  f.Cnpj FROM Fornecedor f WHERE f.Cnpj LIKE '".$cnpj."' and f.idfornecedor != ".$id;
			$result = self::sqlSelectCount($sql);
			return $result;			
		}
    }
    
?>