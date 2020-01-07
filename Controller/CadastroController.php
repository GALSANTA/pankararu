<?php

/**
 * Classe CadastroController
 *
 *Esta classe gerencia a pagina de cadastro
 *
 *
 *@package Controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */
namespace Controller;

use \Core\Controller;
use \Model\Usuario;
use \Model\Socio;

class CadastroController extends Controller
{
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
        $dados = array();
        $socio = new Socio();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

            
            if ($socio->cadastrar($_POST) == TRUE) {
                header("Location:" . BASE_URL . "home");
            } else {
                echo "deu erro";
                exit;
            }
        }

        $dados['estados'] = $socio->getEstados();

        $this->loadTemplate("cadastro", $dados);
    }
}
