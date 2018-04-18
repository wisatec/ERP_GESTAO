<?php
    
	/**
	 * 
	 */
	class HistoricoFuncionario {
		
		function __construct($argument) {
			
		}
		
		function UltimoSalario(){
			$result = HistoricoFuncionarioDao::UltimoSalarioDAO();
			return $result;										
		}
	}
	
?>