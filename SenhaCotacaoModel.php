<?php
    
    /**
     * 
     */
    class SenhaCotacaoModel {
        
        function __construct($argument) {
            
        }
		
		function VerificaAcessoModel($idprod){
			$result =  SenhaCotacaoDAO::VerificaAcessoDAO($idfornec, $cnpj, $pwd);
			return $result;
			
		}			
    }
    
?>