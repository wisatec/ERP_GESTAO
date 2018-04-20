<?php
    /**
     * 
     */
     class FuncionarioDAO extends Conexao {
        
        function __construct($argument) {
            
        }
		static function IdadeDAO($DtNasc){
			$sql = "SELECT CONCAT(TIMESTAMPDIFF(YEAR,'". $DtNasc."', NOW()),' anos') AS idade";
			$result = self::sqlSelectOne($sql);
			return $result;			
		}
		static function UltimoSalario(){
			
			$sql = "SELECT   CASE  
      					WHEN hf.SalarioAtual > 0 AND hf.SalarioReaj = 0 THEN  hf.SalarioAtual
      					WHEN hf.SalarioAtual > 0 AND hf.SalarioReaj > 0 THEN  hf.SalarioReaj
      					END AS atual
    					FROM HistoricoFunc hf 
						WHERE hf.IdHist = (SELECT MAX(IdHist) from HistoricoFunc)";
			$result = self::sqlSelectOne($sql);
			return $result;
										
		}
		
		static function PesquisaRgDAO($rg){
			$sql = "SELECT Rg FROM Funcionario f WHERE f.Rg LIKE '".$rg."'";
			$result = self::sqlSelectCount($sql);
			return $result;			
		}	
		
		static function PesquisaRegFuncDAO($reg){
			$sql = "SELECT f.RegFunc FROM Funcionario f WHERE f.RegFunc LIKE '".$reg."'";
			$result = self::sqlSelectCount($sql);
			return $result;			
		}		
		
		static function PesquisaCpfDAO($cpf){
			$sql = "select f.Cpf from Funcionario f where f.Cpf LIKE '".$cpf."'";
			$result = self::sqlSelectCount($sql);
			return $result;			
		}
		
		static function PesquisaPisDAO($pis){
			$sql = "select f.Pis from Funcionario f where f.Pis LIKE '".$pis."'";
			$result = self::sqlSelectCount($sql);
			return $result;			
		}	
		
		static function PesquisaCltDAO($clt){
			$sql = "select f.Clt from Funcionario f where f.Clt LIKE '".$clt."'";
			$result = self::sqlSelectCount($sql);
			return $result;			
		}
		
		static function PesquisaRgUpDAO($rg,$id){
			$sql = "SELECT  f.Rg FROM Funcionario f WHERE f.Rg LIKE '".$rg."' and f.IdFuncionario != ".$id;
			$result = self::sqlSelectCount($sql);
			return $result;			
		}		
		
		static function PesquisaRegFuncUpDAO($reg,$id){
			$sql = "SELECT  f.RegFunc FROM Funcionario f WHERE f.RegFunc LIKE '".$reg."' and f.IdFuncionario != ".$id;
			$result = self::sqlSelectCount($sql);
			return $result;			
		}		
		
		static function PesquisaCpfUpDAO($cpf,$id){
			$sql = "SELECT  f.Cpf FROM Funcionario f WHERE f.Cpf LIKE '".$cpf."' and f.IdFuncionario != ".$id;
			$result = self::sqlSelectCount($sql);
			return $result;			
		}	
		
		static function PesquisaPisUpDAO($pis,$id){
			$sql = "SELECT  f.Pis FROM Funcionario f WHERE f.Pis LIKE '".$pis."' and f.IdFuncionario != ".$id;
			$result = self::sqlSelectCount($sql);
			return $result;			
		}	
		
		static function PesquisaCltUpDAO($clt,$id){
			$sql = "SELECT  f.Clt FROM Funcionario f WHERE f.Clt LIKE '".$clt."' and f.IdFuncionario != ".$id;
			$result = self::sqlSelectCount($sql);
			return $result;			
		}				
    }
    
?>