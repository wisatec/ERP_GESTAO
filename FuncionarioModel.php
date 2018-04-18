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
   }
   
    
?>