<?php

/**
 * Classe BuscarController
 *
 *Esta classe gerencia a pagina de busca
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

class BuscarController extends Controller
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

        if (isset($_POST['filtro']) && !empty($_POST['buscar'])) {
           
            $filtro = $_POST['filtro'];
            $buscar = $_POST['buscar'];

            $dados['socios'] = $socio->buscar($filtro, $buscar);
        }

        $this->loadTemplate("buscar",$dados);
    }
    
    public function explorar($id)
    {
        $dados = array();

        $socio = new Socio();

        $dados['socio'] = $socio->getSocio($id);
        
        $this->loadTemplate("explorar",$dados);
    }

    public function editar($id)
    {
        $dados = array();
        
        $socio = new Socio();

        if (isset($_POST['nome']) && !empty($_POST['nome'])) {

            if ($socio->editar($_POST) == TRUE) {
                header("Location:" . BASE_URL . "buscar");
            } else {
                echo "deu erro";
                exit;
            }
        }

        $dados['estados'] = $socio->getEstados();
        $dados['socio'] = $socio->getSocio($id);
    
        $this->loadTemplate("editar",$dados);

    }

    public function excluir($id)
    {
        $dados = array();

        $socio = new Socio();

        $socio->excluir($id);

        header("Location: ".BASE_URL."buscar");

    }
    
}


