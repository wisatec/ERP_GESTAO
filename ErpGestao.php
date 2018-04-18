<?php
	include_once 'Constantes.php';
	include_once 'Css.php';
	include_once '/MODEL/Clientes.php';
	
	$directories = array(
	            '/DAO/',
	            '/MODEL/'
	);
	foreach ($directories as $directory) {
	    foreach(glob($directory . "*.php") as $class) {
	        include_once $class;
	    }
	}

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