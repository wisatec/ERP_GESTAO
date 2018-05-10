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
		function ObterFantasiaFornecedor($cod){
			$rs = FornecedorDAO::ObterFantasiaFornecedorDAO($cod);
			return $rs;
		}
		function ObterFoneMailContato($cod){
			$rs = FornecedorDAO::ObterFoneMailContatoDAO($cod);
			return $rs;
		}	
			
    }
    
?>