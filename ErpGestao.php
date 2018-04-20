<?php
	require_once(dirname(__FILE__).'/DAO/Constantes.php');
	require_once(dirname(__FILE__).'/Css.php');
	require_once(dirname(__FILE__).'/BoletoModel.php');
	require_once(dirname(__FILE__).'/ClienteModel.php');
	require_once(dirname(__FILE__).'/EmpresaModel.php');
	require_once(dirname(__FILE__).'/FornecedorModel.php');
	require_once(dirname(__FILE__).'/FuncionarioModel.php');
	require_once(dirname(__FILE__).'/HistoricoFuncModel.php');
	require_once(dirname(__FILE__).'/ProdutoModel.php');
	require_once(dirname(__FILE__).'/DAO/Conexao.php');
	require_once(dirname(__FILE__).'/DAO/ClienteDAO.php');	
	require_once(dirname(__FILE__).'/DAO/FornecedorDAO.php');
	require_once(dirname(__FILE__).'/DAO/FuncionarioDAO.php');
	require_once(dirname(__FILE__).'/DAO/HistoricoFuncDAO.php');
	require_once(dirname(__FILE__).'/DAO/ProdutoDAO.php');
	
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