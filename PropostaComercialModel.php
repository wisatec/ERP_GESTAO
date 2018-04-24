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
	}
	
?>