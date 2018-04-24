<?php
    
	/**
	 * 
	 */
	class PropostaComercialModel {
		
		function __construct($argument) {
			
		}
		
		function CarregaServico($idserv){
			$result =  PropostaComercialDAO::CarregaServicoDAO($idserv);
			return $result;
			
		}
		function CarregaProduto($idprod){
			$result =  PropostaComercialDAO::CarregaProdutoDAO($idprod);
			return $result;
			
		}	
		
		function CarregaTipo($idprod){
			$result =  PropostaComercialDAO::CarregaTipoDAO($id);
			return $result;
			
		}				
	}
	
?>