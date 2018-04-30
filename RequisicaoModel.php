<?php
    /**
     * 
     */
    class RequisicaoModel {
        
        function __construct($argument) {
            
        }
		function ObterDescrEmpresa($cod){
			$result = RequisicaoDAO::ObterDescrEmpresaDAO($cod);
			return $result;
		}
		function ObterDescrFornecedor(){
			$result = RequisicaoDAO::ObterDescrFornecedorDAO($cod);
			return $result;
		}
    }
    
?>