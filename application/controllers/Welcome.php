<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->library('encryption');
	}
	public function index(){
		$this->load->view('welcome_message');
	}

	public function gerar_chave(){
		$dados['chave'] = bin2hex($this->encryption->create_key(16));
		$dados['senha'] = 'Abc@1234';
		$dados['senha_encriptada'] = password_hash($dados['senha'],PASSWORD_DEFAULT);
		$this->load->view('welcome_message', $dados);	
	}
}
