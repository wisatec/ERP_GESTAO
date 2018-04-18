<?php
    /**
     * 
     */
    class ClienteModel {
        
        function __construct($argument) {

            
        }
    
		function ExisteCPF($cnpj){
			$result = ClienteDAO::ExisteCPFDAO($cnpj);
			return $result;
		}
		function ExisteCPFUpdate($cnpj,$codigo){
			$result = ClienteDAO::ExisteCPFDAOUpdate($cnpj, $codigo);
			return $result;
		}
	}
    
?>