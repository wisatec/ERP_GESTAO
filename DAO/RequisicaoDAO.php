<?php
    /**
     * 
     */
    class RequisicaoDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function ObterDescrEmpresaDAO($cod){
			$sql =  "SELECT e.Razao FROM Empresa e WHERE e.IdEmpresa = ".$cod;				
			$result = self::sqlSelectOne($sql);
			return $result;
		}
		static function ObterDescrFornecedorDAO($cod){
			$sql =  "SELECT f.Razao FROM Fornecedor f WHERE f.IdFornecedor = ".$cod;				
			$result = self::sqlSelectOne($sql);
			return $result;
		}
		static function ExisteFornecedorDAO($cod){
			$sql =  "SELECT f.idFornecedor FROM Fornecedor f WHERE f.IdFornecedor = ".$cod;				
			$result = self::sqlRecordBit($sql);
			return $result;			
		}
		static function ExisteEmpresaDAO($cod){
			$sql =  "SELECT e.IdEmpresa FROM Empresa e WHERE e.IdEmpresa =  ".$cod;				
			$result = self::sqlRecordBit($sql);
			return $result;			
		}
		static function ExisteMarcaDAO($cod){
			$sql =  "SELECT m.idMarca FROM Marca m WHERE m.idMarca =  ".$cod;				
			$result = self::sqlRecordBit($sql);
			return $result;			
		}
		static function ObterDescrMarcaDAO($cod){
			$sql =  "SELECT m.DescrMarca FROM Marca m WHERE m.idMarca =  ".$cod;				
			$result = self::sqlSelectOne($sql);
			return $result;
		}			
		static function ExisteItemDAO($cod){
			$sql =  "SELECT i.IdItem FROM Item i WHERE i.IdItem =  ".$cod;				
			$result = self::sqlRecordBit($sql);
			return $result;			
		}    
		static function ObterDescrItemDAO($cod){
			$sql =  "SELECT i.IdItem,i.cProd , i.xProd , i.idTipoItem , i.UnidadeVenda FROM Item i WHERE i.IdItem = ".$cod;				
			$result = self::sqlSelectOne($sql);
			return $result;
		}
		static function ObterTotalRequisicaoDAO($idReq){
			$sql = "SELECT (CASE 
         						WHEN SUM(rcd.VrTotalUnit) IS NULL  THEN 0
         						ELSE SUM(rcd.VrTotalUnit)
       						END) AS total 
    						FROM RequisicaoCompraDet rcd WHERE rcd.IdRc = ".$idReq;				
			$result = self::sqlSelectOne($sql);
			return $result;
		}
		static function AtualizarTotalRequisicaoDAO($idReq,$vrTotal){
			$sql = "UPDATE RequisicaoCompra set TotalRc = ".$vrTotal." WHERE IdRc = ".$idReq;
			$result = self::sqlExec($sql);
			return $result;
		}
		static function GerarPedidoRequisicaoDAO($idRc){
			try{
			self::conn()->beginTransaction();
			$sql = "INSERT INTO PedidoCompra (
										SELECT
										    0  AS idPedido
										   ,NULL AS idCotacao 
										   ,rc.IdRc AS IdRc
										   ,NOW() AS DtEmissao
										   ,rc.IdEmpresa AS IdEmpresaL
										   ,rc.IdFornecedor AS IdFornecedor
										   ,rc.Comprador AS NomeCompradorL
										   ,NULL AS flagFrete
										   ,0 AS VrFrete
										   ,rc.TotalRc AS vrTotalPedido
										   ,NULL AS Obs
										   ,NULL AS idcondicao
										   ,NULL AS IdEndereco
										   ,NULL AS DtPrevisao
										   ,NULL AS DtRecebimento
										   ,0 AS NumeroNota
										   ,NULL AS ArquivoNF
										  FROM RequisicaoCompra rc
										  WHERE IdRc =  ".$idRc.")";
			self::sqlExec($sql);
			$ultimoid = self::conn()->lastInsertId();
			$sqlDet = "INSERT INTO PedidoCompraDet (
										SELECT
										  0 As idPedidoDet
										 ,".$ultimoid." AS idPedido
										 ,rcd.IdItem AS IdItem
										 ,rcd.idMarca AS idMarca
										 ,rcd.QtdeItem AS QtdeItem
										 ,rcd.VrUnit AS VrUnit
										 ,rcd.VrTotalUnit AS VrTotalUnit
										 ,rcd.ItemObs AS ObsItem
										  FROM RequisicaoCompraDet rcd
										  WHERE IdRc =  ".$idRc.")"; 
			self::sqlExec($sqlDet);
			self::conn()->commit();
			return $ultimoid;				
			}catch(Throwable $t){
				self::conn()->rollBack();
				return false;
			}
			
		}
}
    
?>