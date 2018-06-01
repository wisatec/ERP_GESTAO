<?php
require_once 'Constantes.php';

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
				self::$instance = new PDO(HOST,USER,PASS,array(PDO::ATTR_PERSISTENT => true,PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES latin1',));
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
			$rows = $stm->fetchAll(PDO::FETCH_BOTH);
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
			$rows = $stm->fetchAll(PDO::FETCH_ASSOC);
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
			
			$conn = self::conectar();
			$conn->beginTransaction();
			$stm = $conn->prepare($sql);		
			if ($stm->execute()) {
				$conn->commit();
				return 1;
			}			 
		}
		catch(PDOException $e){
			self::$instance->rollBack();
			return 0;
			echo "Erro : ".$e->getMessage();
		}
	}
	private static function ExecutarSqlComposto($sql){
		try{
			
			$conn = self::conectar();
			$conn->beginTransaction();
			$stm = $conn->prepare($sql);		
			if ($stm->execute()) {
				return TRUE;
			}			 
		}
		catch(PDOException $e){
			return FALSE;
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
	protected static function sqlSelectCount($sql){
		return self::ContarLinhas($Sql);
	}
	protected static function sqlSelectAll($sql){
		return self::SelecionarTodos($sql);
	}
	protected static function sqlSelectOne($sql){
		return self::SelecionarUnico($sql);
	}
	protected static function sqlExec($sql){
		return self::ExecutarSql($sql);
	}
	protected static function sqlRecordBit($sql){
		return self::sqlExisteReg($sql);
	}
	protected static function sqlExecComp($sql){
		return self::ExecutarSqlComposto($sql);
	}
}

?>