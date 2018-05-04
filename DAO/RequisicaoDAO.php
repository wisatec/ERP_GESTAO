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
			$sql =  "SELECT SUM(rcd.VrTotalUnit) AS total FROM RequisicaoCompraDet rcd WHERE rcd.IdRc = ".$idReq;				
			$result = self::sqlSelectOne($sql);
			return $result;
		}
		static function AtualizarTotalRequisicaoDAO($idReq,$vrTotal){
			$sql = "UPDATE RequisicaoCompra set TotalRc = ".$vrTotal." WHERE IdRc = ".$idReq;
			$result = self::sqlExec($sql);
			return $result;
		}
}
    
?>