<?php
 
	class CotacaoFornecedorModel{
		
		function __construct($argument) {
			
		}
		
		function VerificaAcessoModel($empresa){
			$result =  CotacaoFornecedorDAO::CarregaEnderecoCobrancaDAO($empresa);
			return $result;
		}			
	}
	
	
?>