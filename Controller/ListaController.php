<?php 
/**
 * Classe listaController
 *
 *Esta classe é a classe que lista e gera um PDF de todos os cadastrados
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


class ListaController extends Controller{

	public function __construct()
	{
		parent::__construct();

		$usuario = new Usuario();

		if (!$usuario->isLoged()) {

			header("Location:".BASE_URL."login");

		}
		
	}
	
	public function index(){

		$dados =  array();

		$socio = new Socio();

		$dados['socios'] = $socio->getSocios();
		
        $this->loadView("lista", $dados);
		
	}
}