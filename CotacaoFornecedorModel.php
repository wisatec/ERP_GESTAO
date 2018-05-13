<?php
 
	class CotacaoFornecedorModel{
		
		function __construct($argument) {
			
		}
		
		function CarregaEnderecoCobrancaModel($empresa){
			$result =  CotacaoFornecedorDAO::CarregaEnderecoCobrancaDAO($empresa);
			return $result;
		}	
		
		function CotacaoValorItensModel($empresa){
			$result =  CotacaoFornecedorDAO::CotacaoValorItensDAO($idCot, $idForn);
			return $result;
		}
	}
	
	
?>