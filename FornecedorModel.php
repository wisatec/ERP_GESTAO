<?php

    /**
     * 
     */
    class FornecedorModel {
        
        function __construct($argument) {
            
        }
		function PesquisaCnpj($cnpj) {
			$result = FornecedorDAO::PesquisaCnpjDAO($cnpj);
			return $result;
		}
		
		function PesquisaCnpjUpdate($cnpj,$id){
			$result = FornecedorDAO::PesquisaCnpjUpdateDAO($cnpj, $id);
			return $result;				
		}	
			
    }
    
?>