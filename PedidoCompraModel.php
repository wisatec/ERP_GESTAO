<?php

 class PedidoCompraModel {
        
        function __construct($argument) {
            
        }
		function ObterPedido($cod) {
			$result = PedidoCompraDAO::ObterDadosPedidoDAO($cod);
			return $result;
		}
		
	
			
    }
?>