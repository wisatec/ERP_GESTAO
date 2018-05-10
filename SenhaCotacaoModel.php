<?php
    
    /**
     * 
     */
    class SenhaCotacaoModel {
        
        function __construct($argument) {
            
        }
		
		function VerificaAcessoModel($idprod){
			$result =  SenhaCotacaoDAO::VerificaAcessoDAO($cnpj, $pwd);
			return $result;
			
		}			
    }
    
?>