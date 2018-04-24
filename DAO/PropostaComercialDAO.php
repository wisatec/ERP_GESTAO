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
			
			$sql = "SELECT p.IdProduto,p.xProd FROM Produto p WHERE p.IdProduto = ".$idprod;
			$result = self::sqlSelectOne($sql);
			self::close();
			return $result;				
		} 			
    }
    
?>