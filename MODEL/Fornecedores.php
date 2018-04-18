<?php
include_once '../DAO/FornecedoresDAO.php';

    /**
     * 
     */
    class Fornecedores extends Conexao {
        
        function __construct($argument) {
            
        }
		function PesquisaCnpj($cnpj) {
			$Dao = new FornecedoresDAO();
			$result = $Dao->PesquisaCnpjDAO($cnpj);
			return $result;
		}
		
		function PesquisaCnpjUpdate($cnpj,$id){
			$Dao = new FornecedoresDAO();
			$result = $Dao->PesquisaCnpjUpdateDAO($cnpj, $id);
			return $result;				
		}	
			
    }
    
?>