<?php
    /**
     * 
     */
    class ItemModel {
        
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
		function ObterDescricaoOrigem($codOrigem){
			$result = ProdutoDAO::ObterDescrOrigemDAO($codOrigem);
			return $result;			
		}
		function CalculaDescontoReal($vrbruto,$vrperc){
			$valorreal = ($vrbruto * $vrperc) / 100;
			return $valor;
		}
		function CalculaDescontoPerc($vrbruto,$vrreal){
			$valorperc = ($vrbruto * $vrreal) / 100;
			return $valor;
		}		
	}
    
?>