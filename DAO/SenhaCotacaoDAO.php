<?php
    
    /**
     * 
     */
    class SenhaCotacaoDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		
		static function VerificaAcessoDAO($cnpj,$pwd){
			$sql = "SELECT COUNT(lc.Cnpj) as qtde,lc.IdFornecedor from LoginCotacao lc WHERE  lc.Cnpj = '".$cnpj."' AND lc.Password = '".$pwd."'";
			$result = self::sqlSelectOne($sql);
			return $result;			
		}		
    }
    
?>