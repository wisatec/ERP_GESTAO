<?php
    /**
     * 
     */
    class ItemDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function ObterDescrNCMDAO($codNcm){
			$sql = "SELECT  n.DescrNcm AS DESCRICAO FROM Ncm n WHERE n.CodNcm = '".$codNcm."'";
			$result = self::sqlSelectOne($sql);
			return $result;			
		}
		static function ExisteNcmDAO($codNcm){
			$sql = "SELECT  n.DescrNcm AS DESCRICAO FROM Ncm n WHERE n.CodNcm = '".$codNcm."'";
			$result = self::sqlRecordBit($sql);
			self::close();
			return $result;
		}
		static function ObterDescrTIPIDAO($codNcm,$codEx){
			$sql = "SELECT te.DescrEx FROM TipiEx te WHERE te.CodNcm = '".$codNcm."' AND te.CodEx = '".$codEx."'";
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;
		}
    	static function ObterDescrNcmCestDAO($codNcm,$codCestNcm){
    		$sql = "SELECT nc.DescrCest FROM NcmCest nc WHERE nc.CodNcm = '".$codNcm."' AND nc.Cest = '".$codCestNcm."'";
			$result = self::sqlSelectOne($sql);
			return $result;
    	}
		static function ObterDescrOrigemDAO($codOrigem){
			$sql = "SELECT po.OrigemDescr FROM ProdutoOrigem po WHERE po.idOrigem = ".$codOrigem;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;
		}
		static function ObterPercLucroTabelaDAO($idtabela){
			$sql = "SELECT tt.PercentLucro FROM TipoTabela tt WHERE tt.idTabela = ".$idtabela;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;
		}	
		static function ObterValorLucroDAO($iditem,$perclucro){
			$sql = "SELECT i.PrecoBruto, ((i.PrecoBruto * $perclucro) / 100 + i.PrecoBruto) AS vrcomlucro FROM Item i WHERE i.IdItem = ".$iditem;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;
		}		
		static function CalculaValorItemDAO($iditem,$perclucro,$qtde){
			$sql = "SELECT i.PrecoBruto, (i.PrecoBruto * 2.00) AS vrsemlucro,
						(((i.PrecoBruto * ".$qtde.")  * ".$perclucro.") / 100 ) AS lucro,
 						 (i.PrecoBruto * ".$qtde.")  + (((i.PrecoBruto * ".$qtde.")  * ".$perclucro.") / 100 ) AS valor  
 						 FROM Item i WHERE i.IdItem = ".$iditem;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;
		}	
		static function ObterItemDAO($iditem){
			$sql = "SELECT i.xProd,i.UnidadeVenda,u.unidade_sigla FROM Item i 
  					INNER JOIN unidade u  ON i.UnidadeVenda = u.unidade_id
  					WHERE i.IdItem = ".$iditem;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;
		}								
		static function ExisteExTipiDAO($codNcm){
			$sql= "SELECT te.CodEx FROM TipiEx te WHERE te.CodNcm = '".$codNcm."'";
			$result = self::sqlRecordBit($sql);
			self::close();
			return $result;
		}
		static function ValidaCodExDAO($codNcm,$codEx){
			$sql= "SELECT te.DescrEx FROM TipiEx te WHERE te.CodNcm = '".$codNcm."' AND te.CodEx = '".$codEx."'";
			$result = self::sqlRecordBit($sql);
			self::close();
			return $result;
		}
		static function ExisteCestDAO($codNcm){
			$sql= "SELECT nc.Cest FROM NcmCest nc WHERE nc.CodNcm = '".$codNcm."'";
			$result = self::sqlRecordBit($sql);
			self::close();
			return $result;			
		}
		static function ValidaCodCestDAO($codNcm,$codCest){
			$sql= "SELECT nc.Cest FROM NcmCest nc WHERE nc.CodNcm = '".$codNcm."' AND nc.Cest = '".$codCest."'";
			$result = self::sqlRecordBit($sql);
			self::close();
			return $result;
		}
    	static function InserirCodEan($codProd,$codBarras){
    		$sql = "INSERT INTO ItemCodEan(CodEan,IdItem)VALUES('".$codBarras."',".$codProd.")";
			$result  = self::sqlExec($sql);
			return $result;
    	}	
		static function ExisteCodItemDAO($codItem){
			$sql = "SELECT i.IdItem FROM Item i WHERE i.IdItem = ".$codItem;
			$bool = self::sqlRecordBit($sql);
			return $bool;		
		}
		static function ObterDescrItemReqDAO($idDetReq){
			$sql = "SELECT
					  rcd.IdItem
					  ,rcd.ItemDescr
					  ,rcd.idMarca
					  ,rcd.DescrMarca
					  ,rcd.unidade_id
					  ,rcd.QtdeItem
					  ,rcd.ItemObs
					  FROM RequisicaoCompraDet rcd
					  WHERE rcd.IdDetRc = ".$idDetReq;
			$rs = self::sqlSelectOne($sql);
			return $rs;			
		}	
		static function ObterMarcaDAO($idmarca){
			$sql = "SELECT m.DescrMarca FROM Marca m WHERE m.idMarca = ".$idmarca;
			$rs = self::sqlSelectOne($sql);
			return $rs;			
		}
		static function ObterVrVendaDAO($idItem,$idTabela){
			$sql = " SELECT
					  ip.VrVenda
					  FROM Item i
					  INNER JOIN ItemPreco ip 
					  ON i.IdItem = ip.IdItem
					  WHERE i.iditem = ".$idItem." AND ip.idTabela = ".$idTabela;
			$rs = self::sqlSelectOne($sql);
		}		
}
    
?>