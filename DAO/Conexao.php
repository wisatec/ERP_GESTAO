<?php
require_once(dirname(__FILE__).'/ERP_GESTAO/Constantes.php') ;

 /**
 * classe responsável pela conexao
 */
 abstract class Conexao{
 	
	#Propriedades
 	protected static $instance = null;
	
	#Método Construtor
	function __construct() {
		
	}
	
	#Métodos Privados
	private static function conectar(){
		try{
			if (self::$instance == null) {
				self::$instance = new PDO(HOST,USER,PASS,array(PDO::ATTR_PERSISTENT => true,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',));
              	self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              	self::$instance->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);	
			}			
		}
		catch(PDOException $e){
			echo "Erro : ".$e->getMessage();
		}
		return self::$instance;
	}
	private static function fechar(){
		self::$instance = null;
	}
	private static function ContarLinhas($sql){
		try{
			$conn = self::conectar();
			$stm = $conn->prepare($sql);		
			$stm->execute(); 
			$rows = $stm->fetchAll();
			$rows = count($rows);
			return $rows; 
		}
		catch(PDOException $e){
			echo "Erro : ".$e->getMessage();
		}
	}
	private static function SelecionarTodos($sql){		
		try{
			
			$result = false;
			$conn = self::conectar();
			$stm = $conn->prepare($sql);		
			$stm->execute(); 
			$rows = $stm->fetchAll();
			return $rows; 
		}
		catch(PDOException $e){
			echo "Erro : ".$e->getMessage();
		}
		
	} 
	private static function SelecionarUnico($sql){
		try{
			
			$result = false;
			$conn = self::conectar();
			$stm = $conn->prepare($sql);		
			$stm->execute(); 
			$rows = $stm->fetch(PDO::FETCH_BOTH);
			return $rows; 
		}
		catch(PDOException $e){
			echo "Erro : ".$e->getMessage();
		}
	}
	private static function ExecutarSql($sql){
		try{
			
			$result = false;
			$conn = self::conectar();
			$stm = $conn->prepare($sql);		
			$stm->execute(); 
			return $stm; 
		}
		catch(PDOException $e){
			echo "Erro : ".$e->getMessage();
		}
	}
	private static function sqlExisteReg($sql){
		try{			
			$result = false;
			$conn = self::conectar();
			$stm = $conn->prepare($sql);		
			$stm->execute(); 
			$rows = $stm->fetchAll(PDO::FETCH_BOTH);
			$rows = count($rows);
			if ($rows > 0) {
				$result = true;
			}
			return $result; 
		}
		catch(PDOException $e){
			echo "Erro : ".$e->getMessage();
		}		
		
	}

	#Métodos Staticos
	protected static function conn(){
		return self::conectar();
	}
	protected static function close(){
		return self::fechar();
	}
	protected static function sqlSelectCount($Sql){
		return self::ContarLinhas($Sql);
	}
	protected static function sqlSelectAll($Sql){
		return self::SelecionarTodos($Sql);
	}
	protected static function sqlSelectOne($Sql){
		return self::SelecionarUnico($Sql);
	}
	protected static function sqlExec($Sql){
		return self::ExecutarSql($Sql);
	}
	protected static function sqlRecordBit($Sql){
		return self::sqlExisteReg($Sql);
	}
}

?>