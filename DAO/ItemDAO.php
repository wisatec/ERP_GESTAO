<?php
    /**
     * 
     */
    class ItemDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function ObterDescrNCM($codNcm){
			$sql = "SELECT n.DescrNcm AS DESCRICAO FROM Ncm n WHERE n.CodNcm = '".$codNcm."'";
			$result = self::sqlSelectOne($sql);
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
			$sql = "SELECT i.PrecoLiq, ((i.PrecoLiq * $perclucro) / 100 + i.PrecoLiq) AS vrcomlucro FROM Item i WHERE i.IdItem = ".$iditem;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;
		}				
	}
    
?>