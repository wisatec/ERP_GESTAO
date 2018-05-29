<?php
    /**
     * 
     */
    class PedidoCompraDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		
		static function ObterDadosPedidoDAO($cod){
			$sql = "select pc.NomeComprador as comprador,
			pc.NumeroNota as Nf 
			from PedidoCompra pc where pc.idPedido = ".$cod;
			$rs = self::sqlSelectOne($sql);
			return $rs;
		}		
    }
    
?>