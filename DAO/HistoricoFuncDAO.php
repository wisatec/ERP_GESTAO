<?php
    /**
     * 
     */
    class HistoricoFuncDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function UltimoSalarioDAO(){
			$sql = "SELECT   CASE  
      					WHEN hf.SalarioAtual > 0 AND hf.SalarioReaj = 0 THEN  hf.SalarioAtual
      					WHEN hf.SalarioAtual > 0 AND hf.SalarioReaj > 0 THEN  hf.SalarioReaj
      					END AS atual
    					FROM HistoricoFunc hf 
						WHERE hf.IdHist = (SELECT MAX(IdHist) from HistoricoFunc)";
			$result = self::sqlSelectOne($sql);
			return $result;			
		}
		
	
    }
    
?>