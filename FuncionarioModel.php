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
		
   }
   
    
?>