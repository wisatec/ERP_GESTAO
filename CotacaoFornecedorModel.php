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
			$rs = CotacaoFornecedorDAO::ObterFornedorDAO($idCot,$idForn);
			return $rs;
		}
		function EmailIndAtualizaData($idCot,$idForn){
			$bool = CotacaoFornecedorDAO::EmailIndAtualizaDataDAO($idCot,$idForn);
			return $bool;
		}	
		function ObterCondicaoPagto($idcond){
			$rs = CotacaoFornecedorDAO::ObterCondicaoPagtoDAO($idcond);
			return $rs;
		}
		function MudaStatusEnvioAprov($cod,$idCot){
			$result = CotacaoFornecedorDAO::MudaStatusEnvioAprovDAO($cod, $idCot);
			return $result;
		}
		function AtualizaTipoAprovacao($idCot,$tipo){
			$bool = CotacaoFornecedorDAO::AtualizaTipoAprovacaoDAO($idCot, $tipo);
			return $bool;
		}	
		function ObtemFornecedorAprovado($idCot){
			$rs = CotacaoFornecedorDAO::ObtemFornecedorAprovadoDAO($idCot);
			return $rs;
		}
		function ObtemFornecedoresAprovados($idCot){
			$rs = CotacaoFornecedorDAO::ObtemFornecedoresAprovadosDAO($idCot);
			return $rs;
		}
	}
	
	
?>