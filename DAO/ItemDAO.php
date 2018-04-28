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
		static function ObterPercServicoDAO($idtabela){
			$sql = "SELECT tt.PercentLucro FROM TipoTabela tt WHERE tt.idTipoItem = 2 AND tt.idTabela = ".$idtabela;
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
    		$sql = "INSERT INTO ProdutoCodEan(CodEan,IdProduto)VALUES('".$codBarras."',".$codProd.")";
			$result  = self::sqlExec($sql);
			self::close();
			return $result;
    	}	
	}
    
?>