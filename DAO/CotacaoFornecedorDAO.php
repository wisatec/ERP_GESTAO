<?php
    
	/**
	 * 
	 */
	class CotacaoFornecedorDAO extends Conexao {
		
		function __construct($argument) {
			
		}
		
		static function CarregaEnderecoCobrancaDAO($empresa){
			$sql = "select 
					  e.IdEndereco,
					  e.TipoLog,
					  e.Endereco,
					  e.Numero,
					  e.Complemento,
					  e.Bairro,
					  e.Cidade,
					  e.Cep,
					  e.Uf 
					  from Endereco e
					where e.IdEmpresa = ".$empresa." and e.IdTipo = 1";
			$result = self::sqlSelectOne($sql);
			return $result;			
		}
				
	}
	
?>