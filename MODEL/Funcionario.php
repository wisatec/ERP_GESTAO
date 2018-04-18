<?php
   /**
    * 
    */
   class Funcionario {
       
       function __construct($argument) {
           
       }
	   
	  function Idade($DtNasc){
		$result = FuncionariosDAO::IdadeDAO($DtNasc);
		return $result; 			
	   }
   }
   
    
?>