<?php
 
	class CotacaoFornecedorModel{
		
		function __construct($argument) {
			
		}
		
		function CarregaEnderecoCobrancaModel($empresa){
			$result =  CotacaoFornecedorDAO::CarregaEnderecoCobrancaDAO($empresa);
			return $result;
		}	
		
		function CotacaoValorItensModel($idCot, $idForn){
			$result =  CotacaoFornecedorDAO::CotacaoValorItensDAO($idCot, $idForn);
			return $result;
		}
		
		function SomaFreteModel($idCot, $idForn){
			$result =  CotacaoFornecedorDAO::SomaFreteDAO($idCot, $idForn);
			return $result;
		}
		function GerarSenhaFornecedor(){
			$inicio = 0;
			$fim = 9999999;
			$access = mt_rand($inicio,$fim);
			return $access;
		}
		function CriptografaSenha($password){
			$pass = md5($password);
			return $pass;
		}
		function ExisteLoginFornecedor($idForn){
			$bool = CotacaoFornecedorDAO::ExisteLoginFornecedorDAO($idForn);
			return $bool;
		}
		function InserirLoginFornecedor($idForn,$Login,$Password){
			$result = CotacaoFornecedorDAO::InserirLoginFornecedorDAO($idForn, $Login, $Password);
			return $result;
		}
		function ObterFornecedores($idCot){
			$rs = CotacaoFornecedorDAO::ObterFornedoresDAO($idCot);
			return $rs;
		}
		function ObterCnpjFornecedor($idForn){
			$rs = CotacaoFornecedorDAO::ObterCnpjFornecedorDAO($idForn);
			return $rs;
		}
		function ObterCredenciais($idForn){
			$rs = CotacaoFornecedorDAO::ObterCredenciaisDAO($idForn);
			return $rs;
		}
		function EmailGeralAtualizaData($idCot){
			$bool = CotacaoFornecedorDAO::EmailGeralAtualizaDataDAO($idCot);
			return $bool;
		}
		function ObterFornecedor($idCot,$idForn){
			$rs = CotacaoFornecedorDAO::ObterFornedoresDAO($idCot,$idForn);
			return $rs;
		}		
	}
	
	
?>