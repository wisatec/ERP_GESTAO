<?php
    
    /**
     * 
     */
    class SenhaCotacaoDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		
		static function VerificaAcessoDAO($idfornec,$cnpj,$pwd){
			$sql = "SELECT COUNT(lc.Cnpj) as qtde from LoginCotacao lc WHERE lc.IdFornecedor = ".$idfornec.
  						" AND lc.Cnpj = '".$cnpj."' AND lc.Password = '".$pwd."'";
			$result = self::sqlSelectOne($sql);
			return $result;			
		}		
    }
    
?>