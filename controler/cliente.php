<?php 
/**
 * Cadastro de clientes

- Crie uma classe com os principais atributos que um cliente deve ter, como nome, cpf, endereço, etc.

- Crie um array de objetos de clientes, com 10 clientes dentro.

- Crie uma página e faça a listagem geral dos clientes. Quando clicar sobre o cliente, você deverá mostrar os dados específicos do cliente selecionado.

- Nessa listagem você também deverá ter a opção de ordenar os clientes pelo seu índice de forma ascendente e descendente.

Não se esqueça de caprichar na interface utilizando o twitter bootstrap.
 */

class Cliente{
	public $id;
	public $nome;
	public $email;
	public $cpf;
	public $dataNascimento;
	public $cidade;
	public $estado;
	public $pais;
	public $cep;
	public $rua;
	public $bairro;
	public $numeroEndereco;
	public $telefoneCelular;
	public $telefoneResidencial;
	
	public function set_nome($nome){
		$this->nome = filter_var($nome,FILTER_SANITIZE_STRING);
	}

	public function get_nome(){
		return $this->nome;
	}

	public function set_email($email){
		$this->email = filter_var($email,FILTER_SANITIZE_STRING);
	}

	public function get_email(){
		return $this->email;
	}

	public function set_cpf($cpf){
		$this->cpf = filter_var($cpf,FILTER_SANITIZE_STRING);
	}

	public function get_cpf(){
		return $this->cpf;
	}
	
	public function set_dataNascimento($dataNascimento){
		//$data = filter_var($dataNascimento,FILTER_SANITIZE_STRING);
		$this->dataNascimento =  filter_var($dataNascimento,FILTER_SANITIZE_STRING);
		// $data = explode($data,"/");
		// if (checkdate(intval($data[1]), intval($data[0]), intval($data[2]))){
		// 			$this->dataNascimento 	=intval($data[0])."/".intval($data[1])."/".intval($data[2])	;
		// }
		// else
		// {
		// 	die("** ocorreu um erro com a entrada da data");
		// }
	}

	public function get_dataNascimento(){
		return $this->dataNascimento;
	}

	public function set_cidade($cidade){
		$this->cidade = filter_var($cidade,FILTER_SANITIZE_STRING);
	}

	public function get_cidade(){
		return $this->cidade;
	}
	
	public function set_estado($estado){
		$this->estado 				= filter_var($estado,FILTER_SANITIZE_STRING);
	}

	public function get_estado(){
		return $this->estado;
	}

	public function set_pais($pais){
		$this->pais 				= filter_var($pais,FILTER_SANITIZE_STRING);
	}

	public function get_pais(){
		return $this->pais;
	}
	
	public function set_cep($cep){
		$this->cep 					= filter_var($cep,FILTER_SANITIZE_STRING);
	}

	public function get_cep(){
		return $this->cep;
	}
	
	public function set_rua($rua){
		$this->rua 					= filter_var($rua,FILTER_SANITIZE_STRING);
	}
	
	public function get_rua(){
		return $this->rua;
	}

	public function set_bairro($bairro){
		$this->bairro 				= filter_var($bairro,FILTER_SANITIZE_STRING);
	}

	public function get_bairro(){
		return $this->bairro;
	}
	
	public function set_numeroEndereco($numeroEndereco){
		$this->numeroEndereco 	 	= filter_var($numeroEndereco,FILTER_SANITIZE_STRING);
	}

	public function get_numeroEndereco(){
		return $this->numeroEndereco;
	}

	public function set_telefoneResidencial($telefoneResidencial){
		$this->telefoneResidencial 	= filter_var($telefoneResidencial,FILTER_SANITIZE_STRING);
	}

	public function get_telefoneResidencial(){
		return $this->telefoneResidencial;
	}

	public function set_telefoneCelular($telefoneCelular){
		$this->telefoneCelular 		= filter_var($telefoneCelular,FILTER_SANITIZE_STRING);
	}
	public function get_telefoneCelular(){
		return $this->telefoneCelular;
	} 

	public function lista_todos(){
			$campos = array(
				'id'=>$this->id,
				'nome'=>$this->nome,
				'email'=>$this->email,
				'cpf'=>$this->cpf,
				'dataNascimento'=>$this->dataNascimento,
				'cidade'=>$this->cidade,
				'estado'=>$this->estado,
				'cep'=>$this->cep,
				'rua'=>$this->rua,
				'bairro'=>$this->bairro,
				'numeroEndereco'=>$this->numeroEndereco,
				'telefoneCelular'=>$this->telefoneCelular,
				'telefoneResidencial'=>$this->telefoneResidencial
				);
			return serialize($campos);
	}

	public function cliente_detalhe(){

	}

	function __construct($id,$nome,$email,$cpf,$dataNascimento,$cidade,$estado,$cep,$rua,$bairro,$numeroEndereco,$telefoneResidencial,$telefoneCelular) {
		$this->id = $id;
		$this->set_nome($nome);
		$this->set_email($email);
		$this->set_cpf($cpf);
		$this->set_dataNascimento($dataNascimento);
		$this->set_cidade($cidade);
		$this->set_estado($estado);
		$this->set_cep($cep);
		$this->set_rua($rua);
		$this->set_bairro($bairro);
		$this->set_numeroEndereco($numeroEndereco);
		$this->set_telefoneCelular($telefoneCelular);
		$this->set_telefoneResidencial($telefoneResidencial);
	}
	

}





