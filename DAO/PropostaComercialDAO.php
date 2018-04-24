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
    }
    
?>