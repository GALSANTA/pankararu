<?php 
/**
 * Classe LoginController
 *
 *Esta classe é a classe que gerencia as ações na pagina de Login
 *
 *
 *@package controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */
namespace Controller;

use \Core\Controller;
use \Model\Usuario;

class LoginController extends Controller{

	public function index()
	{
		$dados =  array();

		if (isset($_POST['email']) && !empty($_POST['email'])) {

			
			$email = addslashes($_POST['email']);
			$senha = addslashes(md5($_POST['senha']));
		
			

			$usuario = new Usuario();
			
			if ($usuario->fazerlogin($email, $senha)) {
				
				header("Location:".BASE_URL."home");
			}

		}

		$this->loadView('login',$dados);

	}

	public function sair()
	{
		unset($_SESSION['login']);
		header("Location:".BASE_URL."login");
	}

}