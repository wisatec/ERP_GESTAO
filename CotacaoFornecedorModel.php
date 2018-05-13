<?php
 
	class CotacaoFornecedorModel{
		
		function __construct($argument) {
			
		}
		
		function CarregaEnderecoCobrancaModel($empresa){
			$result =  CotacaoFornecedorDAO::CarregaEnderecoCobrancaDAO($empresa);
			return $result;
		}	
		
		function CotacaoValorItensModel($idCot, $idForn){
			$result =  CotacaoFornecedorDAO::CotacaoValorItensDAO($idCot, $idForn);
			return $result;
		}
		
		function SomaFreteModel($idCot, $idForn){
			$result =  CotacaoFornecedorDAO::CotacaoValorItensDAO($idCot, $idForn);
			return $result;
		}		
	}
	
	
?>