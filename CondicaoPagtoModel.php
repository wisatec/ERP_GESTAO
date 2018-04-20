<?php
    /**
     * 
     */
    class CondicaoPagto {
        
        function __construct($argument) {
            
        }
		
		function CondicaoPagtoParcela($idcondicao){
			$result = CondicaoPagtoDAO::CondicaoPagto($idcondicao);
			return $result;
		}	
		
		function CondicaoPagtoDiaParcela($idcondicao){
			$result = CondicaoPagtoDAO::CondicaoPagtoDia($idcondicao);
			return $result;
		}			
			
    }
    
?>