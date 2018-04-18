<?php
    
	/**
	 * 
	 */
	class HistoricoFuncModel {
		
		function __construct($argument) {
			
		}
		
		function UltimoSalario(){
			$result = HistoricoFuncDAO::UltimoSalarioDAO();
			return $result;										
		}
		
		function CalculaPorcSal($salario,$valor){
			
			$total = ($salario * $valor) / 100;
			$SalReaj = $salario + $total;
			return $SalReaj;
			
		}
		
	}
	
?>