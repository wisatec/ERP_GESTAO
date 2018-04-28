<?php
    /**
     * 
     */
    class ItemModel {
        
        function __construct($argument) {
            
        }
		function ObterDescricaoNcm($codNcm){
			$result = ItemDAO::ObterDescrNCM($codNcm);
			return $result;
		}
		function ExisteNcm($codNcm){
			$result = ItemDAO::ExisteNcmDAO($codNcm);
			return $result;
		}
		function ObterDescricaoExTIPI($codNcm,$codEx){
			$result = ItemDAO::ObterDescrTIPIDAO($codNcm, $codEx);
			return $result;			
		}
		function ObterDescricaoNcmCest($codNcm,$codNcmCest){
			$result = ItemDAO::ObterDescrNcmCestDAO($codNcm, $codNcmCest);
			return $result;
		}
		function ObterDescricaoOrigem($codOrigem){
			$result = ItemDAO::ObterDescrOrigemDAO($codOrigem);
			return $result;			
		}
		function CalculaDescontoReal($vrbruto,$vrperc){
			$valorreal = ($vrbruto * $vrperc) / 100;
			return $valorreal;
		}
		function CalculaDescontoPerc($vrbruto,$vrreal){
			$valorperc = (100 * $vrreal) / $vrbruto;
			return $valorperc;
		}	
		function ObterPercServicoDAO($idtabela){
			$result = ItemDAO::ObterPercServicoDAO($idtabela);
			return $result;			
		}	
		function ObterValorLucroDAO($iditem, $perclucro){
			$result = ItemDAO::ObterValorLucroDAO($iditem, $perclucro);
			return $result;			
		}			
	}
    
?>