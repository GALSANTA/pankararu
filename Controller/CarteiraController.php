<?php

/**
 * Classe CarteiraController
 *
 *Esta classe seleciona e gera a carteirinhas dos sócios
 *
 *
 *@package Controller
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */
namespace Controller;

use Core\Controller;
use \Model\Usuario;
use \Model\Socio;

class CarteiraController extends Controller
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

        $dados['socios'] = $socio->getSocios();

        $this->loadTemplate('carteira',$dados);
    }
}
