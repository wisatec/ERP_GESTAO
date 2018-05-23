<?php
    
    /**
     * 
     */
    class SenhaCotacaoModel {
        
        function __construct($argument) {
            
        }
		
		function VerificaAcessoModel($cnpj, $pwd){
			$result =  SenhaCotacaoDAO::VerificaAcessoDAO($cnpj, $pwd);
			return $result;
			
		}
		function AtualizaUltimoAcesso($idForn){
			$bool = SenhaCotacaoDAO::AtualizaUltimoAcessoDAO($idForn);
			return $bool;
		}			
    }
    
?>