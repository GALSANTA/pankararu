<?php 
/**
 * Classe NotFoundController
 *
 *Esta classe é a classe que gerencia as ações na pagina notfound
 *
 *
 *@package controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */
namespace Controller;

use \Core\Controller;

class NotFoundController extends Controller {
	
	public function index()
	{
        $dados = array();

		$this->loadTemplate("404",$dados);

	}
}