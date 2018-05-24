<?php
    /**
     * 
     */
    class EmpresaModel {
        
        function __construct($argument) {
            
        }
		function ObterDescrFantasia($cod){
	   		$rs = EmpresaDAO::ObterDescrNomeFantasiaDAO($cod);
			return $rs;
   		}
		function ConcatenaEndereco($idem){
	   		$rs = EmpresaDAO::ConcatenaEnderecoDAO($idem);
			return $rs;
   		}		
    }

?>