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
		
		function CalculaPorcSal($salario,$valor){
			
			$total = ($salario * $valor) / 100;
			$SalReaj = $salario + $total;
			return $SalReaj;
			
		}
		
	}
	
?>