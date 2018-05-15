<?php
    
	/**
	 * 
	 */
	class CotacaoFornecedorDAO extends Conexao {
		
		function __construct($argument) {
			
		}
		
		static function CarregaEnderecoCobrancaDAO($empresa){
			$sql = "select 
					  e.IdEndereco,
					  e.TipoLog,
					  e.Endereco,
					  e.Numero,
					  e.Complemento,
					  e.Bairro,
					  e.Cidade,
					  e.Cep,
					  e.Uf 
					  from Endereco e
					where e.IdEmpresa = ".$empresa." and e.IdTipo = 1";
			$result = self::sqlSelectOne($sql);
			return $result;			
		}
		
		static function CotacaoValorItensDAO($idCot,$idForn){
			$sql = "SELECT  SUM(cvi.VrTotalUnit) as soma  
                      FROM CotacaoValorItens cvi 
                      WHERE cvi.idCotacao = ".$idCot." AND cvi.IdFornecedor = ".$idForn;
			$result = self::sqlSelectOne($sql);
			return $result;			
		}		
		
		static function SomaFreteDAO($idCot,$idForn){
			$sql = " SELECT  SUM(cvi.VrTotalUnit) +
              				(select  ct.VrFrete from CotacaoTotal ct
               				 WHERE ct.idCotacao = ".$idCot." AND ct.IdFornecedor = ".$idForn.") as soma
                      FROM CotacaoValorItens cvi 
                      WHERE cvi.idCotacao = ".$idCot." AND cvi.IdFornecedor = ".$idForn;
			$result = self::sqlSelectOne($sql);
			return $result;			
		}			

		static function ExisteLoginFornecedorDAO($idForn){
			$sql = "SELECT lc.IdFornecedor FROM LoginCotacao lc WHERE lc.IdFornecedor = ".$idForn;
			$bool = self::sqlRecordBit($sql);
			return $bool;
		}
		static function InserirLoginFornecedorDAO($idForn,$Login,$Password){
			$sql = "INSERT INTO LoginCotacao
						(
						  Cnpj
						 ,IdFornecedor
						 ,Password
						)
						VALUES
						(
						  '".$Login."' 
						 ,".$idForn." 
						 ,'".$Password."' 
						)";
			$result = self::sqlExec($sql);
			return $result;
		}			
		static function ObterFornedoresDAO($idCot){
			$sql = "SELECT 
					  cf.IdFornecedor
					  cf.Fantasia
					  ,cf.Email
					  ,e.Razao
					  ,c.DtAbertura
					  ,c.DtLimite 
					  FROM CotacaoFornecedor cf 
					  INNER JOIN Cotacao c
					  ON c.idCotacao = cf.idCotacao
					  INNER JOIN Empresa e
					  ON c.IdEmpresa = e.IdEmpresa
					  WHERE cf.idCotacao = ".$idCot;
			$rs = self::sqlSelectAll($sql);
			return $rs;
		}
		static function ObterCnpjFornecedorDAO($idFornec){
			$sql = "SELECT f.Cnpj from Fornecedor f where f.IdFornecedor = ".$idFornec;
			$rs = self::sqlSelectOne($sql);
			return $rs;
		}
		static function ObterCredenciaisDAO($idForn){
			$sql = "SELECT
					  lc.Cnpj
					  ,lc.Password 
					  FROM LoginCotacao lc
					  WHERE lc.IdFornecedor = ".$idForn;
			$rs = self::sqlSelectOne($sql);
			return $rs;		
		}	
		static function EmailGeralAtualizaDataDAO($idCot){
			$sql =  " UPDATE Cotacao SET EnvioEmail = NOW() WHERE idCotacao = ".$idCot;
			$bool = self::sqlExec($sql);
			return $bool;
		}
}
	
?>