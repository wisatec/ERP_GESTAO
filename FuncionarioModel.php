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
		
		function PesquisaRgUp($rg,$id){
			$result = FuncionarioDAO::PesquisaRgUpDAO($rg,$id);
			return $result;										
		}	
		
		function PesquisaRegFuncUp($reg,$id){
			$result = FuncionarioDAO::PesquisaRegFuncUpDAO($reg,$id);
			return $result;										
		}	

		function PesquisaCpfFuncUp($cpf,$id){
			$result = FuncionarioDAO::PesquisaCpfUpDAO($cpf,$id);
			return $result;										
		}	
		
		function PesquisaPisFuncUp($pis,$id){
			$result = FuncionarioDAO::PesquisaPisUpDAO($pis,$id);
			return $result;										
		}	
		
		function PesquisaCltFuncUp($clt,$id){
			$result = FuncionarioDAO::PesquisaCltUpDAO($clt,$id);
			return $result;										
		}												
   }
   
    
?>