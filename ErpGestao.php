<?php
	include_once 'Constantes.php';
	include_once 'Css.php';
	include_once 'MODEL/boleto.php';
	include_once 'MODEL/Clientes.php';
	include_once 'MODEL/Empresa.php';
	include_once 'MODEL/Fornecedores.php';
	include_once 'MODEL/Funcionario.php';
	include_once 'MODEL/HistoricoFuncionario.php';
	include_once 'DAO/Conexao.php';
	include_once 'DAO/ClientesDAO.php';	
	include_once 'DAO/FornecedoresDAO.php';
	include_once 'DAO/FuncionarioDAO.php';
	include_once 'DAO/HistoricoFuncionarioDAO.php';
	
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