<?php

/**
 * Classe AjaxController
 *
 *Esta classe gerencia as requisições AJAX
 *
 *
 *@package Controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */
namespace Controller;

use \Core\Controller;
use \Model\Usuario;

class AjaxController  extends Controller
{
    public function __construct()
	{
		parent::__construct();

		$usuario = new Usuario();

		if (!$usuario->isLoged()) {

			header("Location:".BASE_URL."login");

		}
		
    }

    public function excluir()
    {
        $dados = array();

        if (isset($_POST['id'])) {
            $dados['id'] = $_POST['id'];
        }

        $this->loadView("excluir",$dados);
    }
}
