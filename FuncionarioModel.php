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
		
		function PesquisaRgUp($rg){
			$result = FuncionarioDAO::PesquisaRgUpDAO($rg);
			return $result;										
		}	
		
		function PesquisaRegFuncUp($reg){
			$result = FuncionarioDAO::PesquisaRegFuncUpDAO($reg);
			return $result;										
		}	

		function PesquisaCpfFuncUp($cpf){
			$result = FuncionarioDAO::PesquisaCpfUpDAO($cpf);
			return $result;										
		}	
		
		function PesquisaPisFuncUp($pis){
			$result = FuncionarioDAO::PesquisaPisUpDAO($pis);
			return $result;										
		}	
		
		function PesquisaCltFuncUp($clt){
			$result = FuncionarioDAO::PesquisaCltUpDAO($clt);
			return $result;										
		}												
   }
   
    
?>