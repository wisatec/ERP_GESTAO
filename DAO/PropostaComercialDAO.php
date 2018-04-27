<?php
    /**
     * 
     */
    class PropostaComercialDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		
		static function CarregaServicoDAO($idserv){
			
			$sql = "SELECT s.IdServico,s.DescServ FROM Servico s WHERE s.IdServico = ".$idserv;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;				
		} 	
		
		static function CarregaProdutoDAO($idprod){
			
			$sql = "SELECT p.IdProduto,p.xProd,p.UnidadeVenda FROM Produto p 
  						INNER JOIN unidade u ON p.UnidadeVenda = u.unidade_id
 						WHERE p.IdProduto = ".$idprod;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;				
		} 
		
		static function CarregaTipoDAO($id){
			
			$sql = "SELECT pcd.idTipo FROM PropostaComercialDet pcd WHERE pcd.idPropostaDet =  ".$id;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;				
		} 
		
		static function CarregaPrecoServicoDAO($idserv,$idtab){
			
			$sql = "SELECT sp.IdServico,sp.idTabela,sp.PercentLucro,sp.VrServico FROM ServicoPreco sp 
						WHERE sp.IdServico = ".$idserv."  AND sp.idTabela =  ".$idtab;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;				
		} 
		
		static function CarregaPrecoProdutoDAO($idprod,$idtab){
			
			$sql = "SELECT pp.idPreco,pp.idTabela,pp.IdProduto,pp.PercentLucro,pp.VrVenda FROM ProdutoPreco pp
  						WHERE pp.IdProduto = ".$idprod." AND pp.idTabela = ".$idtab;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;				
		} 	
		
		static function SomaPropostaDAO($id){
			
			$sql = "SELECT SUM(pcd.VrTotalUnit) AS subtotal,SUM(pcd.vrTotalGeral) AS totalgeral 
						FROM PropostaComercialDet pcd WHERE pcd.IdProposta = ".$id;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;				
		} 				
    }
    
?>