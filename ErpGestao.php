<?php
	require_once 'Conexao.php';
	require_once 'Constantes.php';
	require_once 'Css.php';
	require_once 'Fornecedores.php';
	require_once 'Empresa.php';
	require_once 'Funcionario.php';
	require_once 'Cliente.php';
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