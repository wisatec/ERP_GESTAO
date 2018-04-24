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
    }
    
?>