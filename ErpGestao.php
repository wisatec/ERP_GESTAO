<?php
	include_once 'Constantes.php';
	include_once 'Css.php';
	include_once 'MODEL/Clientes.php';
	include_once 'DAO/ClientesDAO.php';


    /**
     * Classe Utilitários 
     */
    class Utilitarios  {
        
        function __construct($argument) {

        }
	
		function ZerosEsquerda($qtde,$campo){
			$result = str_pad($campo,$qtde, '0', STR_PAD_LEFT);
			return $result;
		}		
    }




    
?>