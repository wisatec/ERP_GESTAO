<?php
require_once 'Constantes.php';
require_once 'Utilitarios.php';
require_once 'Conexao.php';

/**
 * classe principal
 */
abstract class boleto{
	//Variáveis	
	protected $_CodBanco;
	protected $_NBanco;
	protected $_Agencia;
	protected $_NConta;
	protected $_DigConta;
	protected $_Carteira;
	protected $_Pagador;
	protected $_PagadorCnpjCpf;
	protected $_PagadorEndereco;
	protected $_PagadorBairro;
	protected $_PagadorCidade;
	protected $_PagadorUf;
	protected $_PagadorCep;
	protected $_Beneficiario;
	protected $_BeneficiarioCnpjCpf;
	protected $_BeneficiarioEndereco;
	protected $_BeneficiarioBairro;
	protected $_BeneficiarioCidade;
	protected $_BeneficiarioUf;
	protected $_BeneficiarioCep;
	protected $_DtVencto;
	protected $_DtDocumento;
	protected $_NDocumento;
	protected $_EspecieDoc;
	protected $_Aceite;
	protected $_DtProcessamento;
	protected $_NossoNumero;
	protected $_UsoDoBanco;
	protected $_Especie;
	protected $_Quantidade;
	protected $_Valor;
	protected $_CodBarras;
	protected $_LinhaDig;


		
	//Construtor
	function __construct() {
		
	}

	//Propriedades
	public function getCodBanco(){
		return $this->_CodBanco;
	}
	public function getNBanco(){
		return $this->_NBanco;
	}
	public function setNBanco($NBanco){
		$this->_NBanco = $NBanco;
	}
	public function getAgencia(){
		return $this->_Agencia;
	}
	public function setAgencia($Agencia){
		$this->_Agencia = $Agencia;
	}
	public function getNConta(){
		return $this->_NConta;
	}
	public function setNConta($NConta){
		$this->_NConta = $NConta;
	}
	public function getDigConta(){
		return $this->_DigConta;
	}
	public function setDigConta($DigConta){
		$this->_DigConta = $DigConta;
	}
	public function getCarteira(){
		return $this->_Carteira;
	}
	public function setCarteira($Carteira){
		$this->_Carteira = $Carteira;
	}
	public function getPagador(){
		return $this->_Pagador;
	}
	public function setPagador($Pagador){
		$this->_Pagador = $Pagador;
	}
	public function getPagadorCnpjCpf(){
		return $this->_PagadorCnpjCpf;
	}
	public function setPagadorCnpjCpf($PagadorCnpjCpf){
		$this->_PagadorCnpjCpf = $PagadorCnpjCpf;
	}
	public function getPagadorEndereco(){
		return $this->_PagadorEndereco;
	}
	public function setPagadorEndereco($PagadorCnpjCpf){
		$this->_PagadorEndereco = $PagadorEndereco;
	}	
	public function getPagadorBairro(){
		return $this->_PagadorBairro;
	}
	public function setPagadorBairro($PagadorBairro){
		$this->_PagadorBairro = $PagadorBairro;
	}
	public function getPagadorCidade(){
		return $this->_PagadorCidade;
	}
	public function setPagadorCidade($PagadorCidade){
		$this->_PagadorCidade = $PagadorCidade;
	}
	public function getPagadorUf(){
		return $this->_PagadorUf;
	}
	public function setPagadorUf($PagadorUf){
		$this->_PagadorUf = $PagadorUf;
	}
	public function getPagadorCep(){
		return $this->_PagadorCep;
	}
	public function setPagadorCep($PagadorCep){
		$this->_PagadorCep = $PagadorCep;
	}
	public function getBeneficiario(){
		return $this->_Beneficiario;
	}
	public function setBeneficiario($Beneficiario){
		$this->_Beneficiario = $Beneficiario;
	}
	public function getBeneficiarioCnpjCpf(){
		return $this->_BeneficiarioCnpjCpf;
	}
	public function setBeneficiarioCnpjCpf($BeneficiarioCnpjCpf){
		$this->_BeneficiarioCnpjCpf = $BeneficiarioCnpjCpf;
	}
	public function getBeneficiarioEndereco(){
		return $this->_BeneficiarioEndereco;
	}
	public function setBeneficiarioEndereco($BeneficiarioEndereco){
		$this->_BeneficiarioEndereco = $BeneficiarioEndereco;
	}
	public function getBeneficiarioBairro(){
		return $this->_BeneficiarioBairro;
	}
	public function setBeneficiarioBairro($BeneficiarioBairro){
		$this->_BeneficiarioBairro = $BeneficiarioBairro;
	}
	public function getBeneficiarioCidade(){
		return $this->_BeneficiarioCidade;
	}
	public function setBeneficiarioCidade($BeneficiarioCidade){
		$this->_BeneficiarioCidade = $BeneficiarioCidade;
	}
	public function getBeneficiarioUf(){
		return $this->_BeneficiarioUf;
	}
	public function setBeneficiarioUf($BeneficiarioUf){
		$this->_BeneficiarioUf = $BeneficiarioUf;
	}
	public function getBeneficiarioCep(){
		return $this->_BeneficiarioCep;
	}
	public function setBeneficiarioCep($BeneficiarioCep){
		$this->_BeneficiarioCep = $BeneficiarioCep;
	}
	public function getDtVencto(){
		return $this->_DtVencto;
	}
	public function setBeneficiarioUf($DtVencto){
		$this->_DtVencto = $DtVencto;
	}
	public function getDtDocumento(){
		return $this->_DtDocumento;
	}
	public function setDtDocumento($DtDocumento){
		$this->_DtDocumento = $DtDocumento;
	}
	public function getNDocumento(){
		return $this->_NDocumento;
	}
	public function setNDocumento($NDocumento){
		$this->_NDocumento = $NDocumento;
	}
	public function getEspecieDoc(){
		return $this->_EspecieDoc;
	}
	public function setEspecieDoc($EspecieDoc){
		$this->_EspecieDoc = $EspecieDoc;
	}
	public function getAceite(){
		return $this->_Aceite;
	}
	public function setAceite($Aceite){
		$this->_Aceite = $Aceite;
	}
	public function getDtProcessamento(){
		return $this->_DtProcessamento;
	}
	public function setDtProcessamento($DtProcessamento){
		$this->_DtProcessamento = $DtProcessamento;
	}
	public function getNossoNumero(){
		return $this->_NossoNumero;
	}
	public function setNossoNumero($NossoNumero){
		$this->_NossoNumero = $NossoNumero;
	}
	public function getUsoDoBanco(){
		return $this->_UsoDoBanco;
	}
	public function setUsoDoBanco($UsoDoBanco){
		$this->_UsoDoBanco = $UsoDoBanco;
	}
	public function getEspecie(){
		return $this->_Especie;
	}
	public function setUsoDoBanco($Especie){
		$this->_Especie = $Especie;
	}
	public function getQuantidade(){
		return $this->_Quantidade;
	}
	public function setQuantidade($Quantidade){
		$this->_Quantidade = $Quantidade;
	}
	public function getValor(){
		return $this->_Valor;
	}
	public function setValor($Valor){
		$this->_Valor = $Valor;
	}
	public function getCodBarras(){
		return $this->_CodBarras;
	}
	public function setCodBarras($CodBarras){
		$this->_CodBarras = $CodBarras;
	}
	public function getLinhaDig(){
		return $this->_LinhaDig;
	}
	public function setLinhaDig($LinhaDig){
		$this->_LinhaDig = $LinhaDig;
	}
}
?>