<?php
    
    /**
     * 
     */
    class SenhaCotacaoDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		
		static function VerificaAcessoDAO($cnpj,$pwd){
			$sql = "SELECT COUNT(lc.Cnpj) as qtde,
					  lc.IdFornecedor  as id
					  ,f.Razao as Razao
					  ,(CASE
					      WHEN lc.UltimoAcesso is NULL THEN 'Primeiro Acesso !'
					      ELSE lc.UltimoAcesso
					  END) AS ultimoAcesso
					  FROM LoginCotacao lc
					  INNER JOIN Fornecedor f
					  ON f.IdFornecedor = lc.IdFornecedor 
					  WHERE  lc.Cnpj = '".$cnpj."' AND lc.Password = '".$pwd."'";
			$rs = self::sqlSelectOne($sql);
			return $rs;			
		}		
    }
    
?>