<?php header("Content-type: text/html; charset=iso-8859-1");
    /**
     * 
     */
    class RequisicaoModel {
        
        function __construct($argument) {
            
        }
		function ObterDescrEmpresa($cod){
			$result = RequisicaoDAO::ObterDescrEmpresaDAO($cod);
			return $result;
		}
		function ObterDescrFornecedor($cod){
			$result = RequisicaoDAO::ObterDescrFornecedorDAO($cod);
			return $result;
		}
		function ExisteFornecedor($cod){
			$result = RequisicaoDAO::ExisteFornecedorDAO($cod);
			return $result;
		}
		function ExisteEmpresa($cod){
			$result = RequisicaoDAO::ExisteEmpresaDAO($cod);
			return $result;
		}
		function ExisteMarca($cod){
			$result = RequisicaoDAO::ExisteMarcaDAO($cod);
			return $result;
		}
		function ObterDescrMarca($cod){
			$result = RequisicaoDAO::ObterDescrMarcaDAO($cod);
			return $result;
		}
		function ExisteItem($cod){
			$result = RequisicaoDAO::ExisteItemDAO($cod);
			return $result;
		}
		function ObterDescrItem($cod){
			$result = RequisicaoDAO::ObterDescrItemDAO($cod);
			return $result;
		}
		function ObterTotalRequisicao($idReq){
			$result = RequisicaoDAO::ObterTotalRequisicaoDAO($idReq);
			return $result;
		}
		function AtualizarTotalRequisicao($idReq,$vrTotal){
			$result = RequisicaoDAO::AtualizarTotalRequisicaoDAO($idReq, $vrTotal);
			return $result;
		}
		function ExibeDescrEstadoReq($codEstado){
			if ($codEstado == 1) {
				return "ABERTA";
			} else {
				return "ENCERRADA";
			}			
		}
		function ExibeDescrTipoReq($tipo){
			if ($tipo == 1) {
				return "COMPRA DIRETA";
			} else {
				return "COTAÇÃO";
			}
		}		
    }
    
?>