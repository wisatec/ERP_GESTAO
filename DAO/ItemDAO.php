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
	}
    
?>