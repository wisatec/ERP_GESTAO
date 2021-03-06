<?php
    /**
     * 
     */
    class FornecedorDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function PesquisaCnpjDAO($cnpj){
			$sql = "SELECT f.Cnpj FROM Fornecedor f WHERE f.Cnpj LIKE '".$cnpj."'";
			$result = self::sqlSelectCount($sql);
			return $result;			
		}
		static function PesquisaCnpjUpdateDAO($cnpj,$id){
			$sql = "SELECT  f.Cnpj FROM Fornecedor f WHERE f.Cnpj LIKE '".$cnpj."' and f.idfornecedor != ".$id;
			$result = self::sqlSelectCount($sql);
			return $result;			
		}
		static function ObterFantasiaFornecedorDAO($cod){
			$sql = "SELECT  f.Fantasia FROM Fornecedor f WHERE f.idfornecedor = ".$cod;
			$rs = self::sqlSelectOne($sql);
			return $rs;				
		}
		static function ObterFoneMailContatoDAO($cod){
			$sql = "SELECT fc.Tel,fc.Email FROM FornecedorContato fc WHERE fc.idFornecedorContato = ".$cod;
			$rs = self::sqlSelectOne($sql);
			return $rs;				
		}
		
    }
    
?>