<?php
	require_once(dirname(__FILE__).'/DAO/Constantes.php');
	require_once(dirname(__FILE__).'/Css.php');
	require_once(dirname(__FILE__).'/BoletoModel.php');
	require_once(dirname(__FILE__).'/ClienteModel.php');
	require_once(dirname(__FILE__).'/EmpresaModel.php');
	require_once(dirname(__FILE__).'/FornecedorModel.php');
	require_once(dirname(__FILE__).'/FuncionarioModel.php');
	require_once(dirname(__FILE__).'/HistoricoFuncModel.php');
	require_once(dirname(__FILE__).'/ItemModel.php');
	require_once(dirname(__FILE__).'/RequisicaoModel.php');
	require_once(dirname(__FILE__).'/ProdutoPrecoModel.php');
	require_once(dirname(__FILE__).'/PropostaComercialModel.php');
	require_once(dirname(__FILE__).'/SenhaCotacaoModel.php');
	require_once(dirname(__FILE__).'/CotacaoFornecedorModel.php');
	require_once(dirname(__FILE__).'/PedidoCompraModel.php');
	require_once(dirname(__FILE__).'/DAO/Conexao.php');
	require_once(dirname(__FILE__).'/DAO/ClienteDAO.php');
	require_once(dirname(__FILE__).'/DAO/EmpresaDAO.php');	
	require_once(dirname(__FILE__).'/DAO/FornecedorDAO.php');
	require_once(dirname(__FILE__).'/DAO/FuncionarioDAO.php');
	require_once(dirname(__FILE__).'/DAO/HistoricoFuncDAO.php');
	require_once(dirname(__FILE__).'/DAO/ItemDAO.php');
	require_once(dirname(__FILE__).'/DAO/ProdutoPrecoDAO.php');
	require_once(dirname(__FILE__).'/DAO/PropostaComercialDAO.php');
	require_once(dirname(__FILE__).'/DAO/RequisicaoDAO.php');
	require_once(dirname(__FILE__).'/DAO/SenhaCotacaoDAO.php');
	require_once(dirname(__FILE__).'/DAO/CotacaoFornecedorDAO.php');
	require_once(dirname(__FILE__).'/DAO/PedidoCompraDAO.php');
	
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
		function GerarCodBarrasEAN13(){
			$impares = array(1,3,5,7,9,11);
			$pares = array(0,2,4,6,8,10);
			
			$bloco1 = rand(0, 9999);
			$bloco1 = str_pad($bloco1,4, '0', STR_PAD_LEFT);;
			$bloco2 = rand(0, 9999);
			$bloco2 = str_pad($bloco2,4, '0', STR_PAD_LEFT);;
			$bloco3 = rand(0, 9999);
			$bloco3 = str_pad($bloco3,4, '0', STR_PAD_LEFT);;
			$somaPares = 0;
			$somaImpares = 0;
			
			$codigo = $bloco1.$bloco2.$bloco3;
			
			foreach ($impares as $key => $value) {
				$somaImpares += substr($codigo, $value,1);
			}
			foreach ($somaPares as $key => $value) {
				$somapares += substr($codigo, $value,1);
			}
			$SomaParesImpares = ($somaPares + $somaImpares);
			
			$dac = $SomaParesImpares%10;
			$codigo .= $dac;
			return $codigo;
			
		}		
    	function CalcularValorTotal($qtde , $vrUnit){
    		$vrTotal = ($qtde * $vrUnit);
			return $vrTotal;
    	}
	
	
	}




    
?>