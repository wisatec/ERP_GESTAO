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
					  ,f.Fantasia
					  ,cf.Email
					  ,e.Razao
					  ,c.DtAbertura
					  ,c.DtLimite 
					  FROM CotacaoFornecedor cf 
					  INNER JOIN Cotacao c
					  ON c.idCotacao = cf.idCotacao
					  INNER JOIN Empresa e
					  ON c.IdEmpresa = e.IdEmpresa
            		  INNER JOIN Fornecedor f
            		  ON cf.IdFornecedor = f.IdFornecedor
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
		static function ObterFornedorDAO($idCot,$idForn){
			$sql = "SELECT 
					  cf.IdFornecedor
					  ,f.Fantasia
					  ,cf.Email
					  ,e.Razao
					  ,c.DtAbertura
					  ,c.DtLimite 
					  FROM CotacaoFornecedor cf 
					  INNER JOIN Cotacao c
					  ON c.idCotacao = cf.idCotacao
					  INNER JOIN Empresa e
					  ON c.IdEmpresa = e.IdEmpresa
            		  INNER JOIN Fornecedor f
            		  ON cf.IdFornecedor = f.IdFornecedor
					  WHERE cf.idCotacao = ".$idCot." AND cf.IdFornecedor = ".$idForn;
			$rs = self::sqlSelectOne($sql);
			return $rs;
		}
		static function EmailIndAtualizaDataDAO($idCot,$idForn){
			$sql =  "UPDATE CotacaoFornecedor SET ReenvioEmail = NOW() WHERE idCotacao = ".$idCot." AND IdFornecedor = ".$idForn;
			$bool = self::sqlExec($sql);
			return $bool;
		}
		static function ObterCondicaoPagtoDAO($idcond){
			$sql = "select cp.condicao from CondicaoPagto cp WHERE cp.idcondicao = ".$idcond;
			$rs = self::sqlSelectOne($sql);
			return $rs;		
		}
		static function MudaStatusEnvioAprovDAO($cod,$idCot){
			$sql = "UPDATE Cotacao SET flagStatusCotacao = (CASE
                                        WHEN ".$cod." = 1 THEN 3
                                        WHEN ".$cod." = 2 THEN 1
										END)
  						WHERE idCotacao = ".$idCot;
			$bool = self::sqlExec($sql);
			return $bool;
		}
		static function AtualizaTipoAprovacaoDAO($idCot,$tipo){
			$sql =  "UPDATE Cotacao SET TipoAprovacao = ".$tipo." WHERE idCotacao = ".$idCot;
			$bool = self::sqlExec($sql);
			return $bool;
		}	
		static function ObtemFornecedorAprovadoDAO($idCot){
			$sql = "SELECT ct.IdFornecedor from CotacaoTotal ct where ct.idCotacao = ".$idCot." and ct.CotacaoAprov = 2";
			$rs = self::sqlSelectOne($sql);
			return $rs;
		}
		static function ObtemFornecedoresAprovadosDAO($idCot){
			$sql = "SELECT ct.IdFornecedor from CotacaoTotal ct where ct.idCotacao = ".$idCot." and ct.CotacaoAprov = 2";
			$rs = self::sqlSelectAll($sql);
			return $rs;			
		}
		static function GerarPedidoCotacaoDAO($idCot,$idForn){
			try{
				//INICIA A TRANSAÇÃO
				self::conn()->beginTransaction();
				//INSERE OS DADOS NA TABELA PRINCIPAL
				$sql = "INSERT INTO PedidoCompra
								(SELECT 
								  0 AS idPedido
								 ,c.idCotacao AS idCotacao
								 ,NULL AS IdRc
								 ,NOW() AS DtEmissao
								 ,c.IdEmpresa AS IdEmpresa
								 ,".$idForn." AS IdFornecedor
								 ,c.NomeComprador AS NomeComprador
								 ,ct.flagFrete AS flagFrete
								 ,ct.VrFrete AS VrFrete
								 ,ct.vrTotalCotacao AS vrTotalPedido
								 ,NULL AS Obs
								  ,ct.idcondicao AS idcondicao
								 ,c.IdEndereco AS IdEndereco
								 ,NULL  AS DtPrevisao-- DtPrevisao - DATE
								 ,NULL AS DtRecebimento
								 ,0 AS NumeroNota
								 ,NULL AS ArquivoNF
								  FROM Cotacao c
								  INNER JOIN CotacaoTotal ct
								  ON c.idCotacao = ct.idCotacao
								  WHERE c.idCotacao = ".$idCot." AND ct.IdFornecedor =  ".$idForn.")";
				self::sqlExecComp($sql);
				//OBTEM O ULTIMO ID INSERIDO NO INSERT ANTERIOR
				$ultimoid = self::conn()->lastInsertId();
				// INSERE OS DADOS NA TABELA DETALHE
				$sqlDet = "INSERT INTO PedidoCompraDet
								  (SELECT 
								    0  AS idPedidoDet
								   ,".$ultimoid."  AS idPedido
								   ,cvi.IdItem AS idItem 
								   ,cvi.idMarca AS idMarca 
								   ,cvi.QtdeItem AS QtdeItem 
								   ,cvi.VrUnit AS VrUnit 
								   ,cvi.VrSubTotalUnit AS VrTotalUnit 
								   ,cvi.ObsItem AS ObsItem  
								    FROM CotacaoValorItens cvi
								    WHERE cvi.idCotacao = ".$idCot." AND cvi.IdFornecedor = ".$idForn.")"; 
				self::sqlExecComp($sqlDet);
				//ATUALIZA O STATUS DA COTAÇÃO PARA ENCERRADA
				$sqlCot = "UPDATE Cotacao set PedidoGerado = 2 , flagStatusCotacao = 2  WHERE idCotacao = ".$idCot;
				self::sqlExecComp($sqlCot);
				//CONFIRMA AS ALTERAÇÕES NA BASE
				self::conn()->commit();				
				return $ultimoid;							
			}catch(exception $e){
				// DESFAZ TODA A OPERAÇÃO EFETUADA NO BANCO
				self::conn()->rollBack();
				return false;
			}

		}
}
	
?>