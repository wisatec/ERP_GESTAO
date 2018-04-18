<?php
include_once '../DAO/ClientesDAO.php';
    /**
     * 
     */
    class Clientes {
        
        function __construct($argument) {

            
        }
    
		function ExisteCPF($cnpj){
			$Dao = new ClienteDAO();
			$result = $Dao->ExisteCPFDAO($cnpj);
			return $result;
		}
		function ExisteCPFUpdate($cnpj,$codigo){
			$Dao = new ClienteDAO();
			$result = $Dao->ExisteCPFDAOUpdate($cnpj, $codigo);
			return $result;
		}
	}
    
?>