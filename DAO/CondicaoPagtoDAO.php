<?php
    /**
     * 
     */
    class CondicaoPagtoDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		
		static function CondicaoPagto($idcondicao){
			
			$sql = "select QtdeParcelas from CondicaoPagto where idcondicao = ".$idcondicao;
			$result = self::sqlSelectOne($sql);
			return $result;
										
		}	
		
		static function CondicaoPagtoDia($idcondicaodia){
			
			$sql = "select QtdeParcelas from CondicaoPagto where idcondicao = ".$idcondicaodia;
			$result = self::sqlSelectOne($sql);
			return $result;
										
		}				
    }
    
?>