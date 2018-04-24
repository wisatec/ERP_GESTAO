<?php
    /**
     * 
     */
    class ProdutoModel {
        
        function __construct($argument) {
            
        }
		function ObterDescricaoNcm($codNcm){
			$result = ProdutoDAO::ObterDescrNCM($codNcm);
			return $result;
		}
		function ObterDescricaoExTIPI($codNcm,$codEx){
			$result = ProdutoDAO::ObterDescrTIPIDAO($codNcm, $codEx);
			return $result;			
		}
		function ObterDescricaoNcmCest($codNcm,$codNcmCest){
			$result = ProdutoDAO::ObterDescrNcmCestDAO($codNcm, $codNcmCest);
			return $result;
		}
	}
    
?>