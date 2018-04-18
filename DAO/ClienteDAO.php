<?php
    /**
     * 
     */
    class ClienteDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function ExisteCPFDAO($cnpj){
			$sql = "SELECT *FROM Cliente c WHERE c.CnpjCpf = '".$cnpj."'";
			$result = self::sqlRecordBit($sql);
			return $result;			
		}
		static function ExisteCPFDAOUpdate($cnpj,$codigo){
			$sql = "SELECT *FROM Cliente c WHERE c.CnpjCpf = '".$cnpj."' AND c.idCliente != ".$codigo;
			$result = self::sqlRecordBit($sql);
			return $result;
		}
    }
    
?>