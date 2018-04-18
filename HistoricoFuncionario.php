<?php
    
	/**
	 * 
	 */
	class HistoricoFuncionario extends Conexao {
		
		function __construct($argument) {
			
		}
		
		function UltimoSalario(){
			
			$sql = "SELECT   CASE  
      					WHEN hf.SalarioAtual > 0 AND hf.SalarioReaj = 0 THEN  hf.SalarioAtual
      					WHEN hf.SalarioAtual > 0 AND hf.SalarioReaj > 0 THEN  hf.SalarioReaj
      					END AS atual
    					FROM HistoricoFunc hf 
						WHERE hf.IdHist = (SELECT MAX(IdHist) from HistoricoFunc)";
			$result = self::sqlSelectOne($sql);
			return $result;	
		}
		
		function CalculaPorcSal($salario,$valor){
			
			$total = ($salario * $valor) / 100;
			$SalReaj = $salario + $total;
			return $SalReaj;
			
		}
		
	}
	
?>