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
	require_once(dirname(__FILE__).'/ProdutoPrecoModel.php');
	require_once(dirname(__FILE__).'/PropostaComercialModel.php');
	require_once(dirname(__FILE__).'/DAO/Conexao.php');
	require_once(dirname(__FILE__).'/DAO/ClienteDAO.php');	
	require_once(dirname(__FILE__).'/DAO/FornecedorDAO.php');
	require_once(dirname(__FILE__).'/DAO/FuncionarioDAO.php');
	require_once(dirname(__FILE__).'/DAO/HistoricoFuncDAO.php');
	require_once(dirname(__FILE__).'/DAO/ItemDAO.php');
	require_once(dirname(__FILE__).'/DAO/ProdutoPrecoDAO.php');
	require_once(dirname(__FILE__).'/DAO/PropostaComercialDAO.php');
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
			$bloco1 = lpad($bloco1,4,0);
			$bloco2 = rand(0, 9999);
			$bloco2 = lpad($bloco2,4,0);
			$bloco3 = rand(0, 9999);
			$bloco3 = lpad($bloco3,4,0);
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
    }




    
?>