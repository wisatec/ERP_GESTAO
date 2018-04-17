<?php
    /**
     * 
     */
    class Clientes extends Conexao {
        
        function __construct($argument) {

            
        }
    
		function ExisteCPF($cnpj){
			
			$sql = "SELECT *FROM Cliente c WHERE c.CnpjCpf = '".$cnpj."'";
			$result = self::sqlRecordBit($sql);
			return $result;
		}
	}
    
?>