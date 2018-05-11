<?php
 
	class CotacaoFornecedorModel{
		
		function __construct($argument) {
			
		}
		
		function CarregaEnderecoCobrancaModel($empresa){
			$result =  CotacaoFornecedorDAO::CarregaEnderecoCobrancaDAO($empresa);
			return $result;
		}			
	}
	
	
?>