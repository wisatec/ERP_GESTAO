<?php
   /**
    * 
    */
   class Funcionario extends Conexao {
       
       function __construct($argument) {
           
       }
	   
	  public function Idade($nova_data){
	   	
			$sql = "SELECT CONCAT(TIMESTAMPDIFF(YEAR,". $nova_data.", NOW()),' anos') AS idade";
			$result = self::sqlSelectOne($sql);
			return $result;			
	   }
   }
   
    
?>