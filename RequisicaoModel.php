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
		function ObterDescrFornecedor($cod){
			$result = RequisicaoDAO::ObterDescrFornecedorDAO($cod);
			return $result;
		}
		function ExisteFornecedor($cod){
			$result = RequisicaoDAO::ExisteFornecedorDAO($cod);
			return $result;
		}
		function ExisteEmpresa($cod){
			$result = RequisicaoDAO::ExisteEmpresaDAO($cod);
			return $result;
		}
		function ExisteMarca($cod){
			$result = RequisicaoDAO::ExisteMarcaDAO($cod);
			return $result;
		}
		function ObterDescrMarca($cod){
			$result = RequisicaoDAO::ObterDescrMarcaDAO($cod);
			return $result;
		}
		function ExisteItem($cod){
			$result = RequisicaoDAO::ExisteItemDAO($cod);
			return $result;
		}
		function ObterDescrItem($cod){
			$result = RequisicaoDAO::ObterDescrItemDAO($cod);
			return $result;
		}		
    }
    
?>