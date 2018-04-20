<?php
   /**
* 
*/
   class FuncionarioModel {
       
       function __construct($argument) {
           
       }
	   
	  function Idade($DtNasc){
		$result = FuncionarioDAO::IdadeDAO($DtNasc);
		return $result; 			
	   }
	  
		function PesquisaRg($rg){
			$result = FuncionarioDAO::PesquisaRgDAO($rg);
			return $result;										
		}		
			  
		function PesquisaRegFunc($reg){
			$result = FuncionarioDAO::PesquisaRegFuncDAO($reg);
			return $result;										
		}	
		
		function PesquisaCpfFunc($cpf){
			$result = FuncionarioDAO::PesquisaCpfDAO($cpf);
			return $result;										
		}		
		
		function PesquisaPisFunc($pis){
			$result = FuncionarioDAO::PesquisaPisDAO($pis);
			return $result;										
		}	
		
		function PesquisaCltFunc($clt){
			$result = FuncionarioDAO::PesquisaCltDAO($clt);
			return $result;										
		}			
   }
   
    
?>