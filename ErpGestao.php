<?php
<<<<<<< HEAD

	include_once 'Constantes.php';
	include_once 'Css.php';
=======
	require_once 'Conexao.php';
	require_once 'Constantes.php';
	require_once 'Css.php';
	require_once 'Fornecedores.php';
	require_once 'Empresa.php';
	require_once 'Funcionario.php';
	require_once 'HistoricoFuncionario.php';
>>>>>>> 03f05b494001742763a0c3f609db97703a5fb245
	
	$directories = array(
	            'DAO/',
	            'MODEL/'
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