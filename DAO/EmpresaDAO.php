<?php
    /**
     * 
     */
    class EmpresaDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function ObterDescrNomeFantasiaDAO($cod){
			$sql = "SELECT e.Fantasia FROM Empresa e WHERE e.IdEmpresa = ".$cod;
			$rs = self::sqlSelectOne($sql);
			return $rs;
		}
		static  function ConcatenaEnderecoDAO($idem)
		{
			$sql = "SELECT e.IdEndereco AS idEndereco, 
			CONCAT( te.TipoDesc,' - ',e.TipoLog,' ',e.Endereco,', ',e.Numero,' - ',
			e.Bairro,' - Cep ',SUBSTR(e.Cep,1,5),'-',SUBSTR(e.Cep,6,3),' - ',e.Cidade, ' - ',e.Uf )  as enderec
			FROM Endereco e
  			INNER JOIN TipoEndereco te 
  			ON e.IdTipo = te.IdTipo
			WHERE e.IdTipo  = 1 and e.IdEmpresa = ".$idem;
			$rs = self::sqlSelectOne($sql);
			return $rs;			
		}
		
    }
    
?>