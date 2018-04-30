<?php
    /**
     * 
     */
    class ItemModel {
        
        function __construct($argument) {
            
        }
		function ObterDescricaoNcm($codNcm){
			$result = ItemDAO::ObterDescrNCMDAO($codNcm);
			return $result;
		}
		function ExisteNcm($codNcm){
			$result = ItemDAO::ExisteNcmDAO($codNcm);
			return $result;
		}
		function ExisteExTipi($codNcm){
			$result = ItemDAO::ExisteExTipiDAO($codNcm);
			return $result;
		}
		function ValidaCodEx($codNcm,$codEx){
			$result = ItemDAO::ValidaCodExDAO($codNcm, $codEx);
			return $result;
		}
		function ObterDescricaoExTIPI($codNcm,$codEx){
			$result = ItemDAO::ObterDescrTIPIDAO($codNcm, $codEx);
			return $result;			
		}
		function ExisteCest($codNcm){
			$result = ItemDAO::ExisteCestDAO($codNcm);
			return $result;
		}
		function ValidaCodCest($codNcm,$codCest){
			$result = ItemDAO::ValidaCodCestDAO($codNcm, $codCest);
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
		function ObterPercLucroTabela($idtabela){
			$result = ItemDAO::ObterPercLucroTabelaDAO($idtabela);
			return $result;			
		}	
		function ObterValorLucroDAO($iditem, $perclucro){
			$result = ItemDAO::ObterValorLucroDAO($iditem, $perclucro);
			return $result;			
		}			
    	function GerarCodEan($codProd){
    		$util = new Utilitarios();
			$codBarras = $util->GerarCodBarrasEAN13();
    		$result = ItemDAO::InserirCodEan($codProd, $codBarras);
			return $result;
    	}	
	}
    
?>