<?php 
/**
 * Classe HomeController
 *
 *Esta classe é a classe que gerencia as ações na pagina Home
 *
 *
 *@package controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */
namespace Controller;

use \Core\Controller;
use \Model\Usuario;
use \Model\Socio;

class HomeController extends Controller{

	public function __construct()
	{
		parent::__construct();

		$usuario = new Usuario();

		if (!$usuario->isLoged()) {

			header("Location:".BASE_URL."login");

		}
		
	}

	public function index()
	{
		
		$dados =  array();

		$socio = new Socio();
		
		$data = time();
		
		$dados['menor18']=0;
		$dados['maior18']=0;
		$dados['maior80']=0;

		
		foreach ($socio->getSocios() as $socio) {
			$dt_nascimento = strtotime($socio['dt_nascimento']);

			$dt_socio = ($data-$dt_nascimento)/31536000;

			if ($dt_socio<18) {
				
				$dados['menor18']++;
			} 
			elseif ($dt_socio>=18 && $dt_socio<=50) {
				
				$dados['maior18']++;
			}
			else {
				$dados['maior80']++;
			}


		}	
		$this->loadTemplate('home',$dados);

	}

}