<?php
	require_once(dirname(__FILE__).'Constantes.php');
	require_once(dirname(__FILE__).'Css.php');
	require_once(dirname(__FILE__).'MODEL/boleto.php');
	require_once(dirname(__FILE__).'MODEL/Clientes.php');
	require_once(dirname(__FILE__).'MODEL/Empresa.php');
	require_once(dirname(__FILE__).'MODEL/Fornecedores.php');
	require_once(dirname(__FILE__).'MODEL/Funcionario.php');
	require_once(dirname(__FILE__).'MODEL/HistoricoFuncionario.php');
	require_once(dirname(__FILE__).'DAO/Conexao.php');
	require_once(dirname(__FILE__).include_once 'DAO/ClientesDAO.php');	
	require_once(dirname(__FILE__).include_once 'DAO/FornecedoresDAO.php');
	require_once(dirname(__FILE__).include_once 'DAO/FuncionarioDAO.php');
	require_once(dirname(__FILE__).include_once 'DAO/HistoricoFuncionarioDAO.php');
	
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