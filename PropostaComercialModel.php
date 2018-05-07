<?php
    
	/**
	 * 
	 */
	class PropostaComercialModel {
		
		function __construct($argument) {
			
		}
		
		function CarregaServico($idserv){
			$result =  PropostaComercialDAO::CarregaServicoDAO($idserv);
			return $result;
			
		}
		function CarregaProduto($idprod){
			$result =  PropostaComercialDAO::CarregaProdutoDAO($idprod);
			return $result;
			
		}	
		
		function CarregaTipo($idprod){
			$result =  PropostaComercialDAO::CarregaTipoDAO($idprod);
			return $result;
			
		}	
		
		function CarregaPrecoServico($idserv,$idtab){
			$result =  PropostaComercialDAO::CarregaPrecoServicoDAO($idserv, $idtab);
			return $result;
			
		}		
		
		function CarregaPrecoProduto($idprod,$idtab){
			$result =  PropostaComercialDAO::CarregaPrecoProdutoDAO($idprod, $idtab);
			return $result;
			
		}	
		
		function CalculaItem($qtde,$vrunit){
			$subtotal = $qtde * $vrunit;
			return $subtotal;
		}	
		
		function SomaValorProposta($id){
			$result =  PropostaComercialDAO::SomaValorPropostaDAO($id);
			return $result;			
			
		}	
		
		function AtualizarTotalProposta($idReq,$vrTotal){
			$result =  PropostaComercialDAO::AtualizarTotalPropostaDAO($idReq, $vrTotal);
			return $result;			
			
		}				
	}
	
?>