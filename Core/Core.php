<?php
namespace Core;

class Core {

	public function index()
	{
		$url = "".(isset($_GET['url'])?$_GET['url']:'');

		$params = array();

		if (!empty($url) && $url != '/') {
			
			$url = explode('/', $url);

			$currentController = $url[0]."Controller";

			array_shift($url);

			if (isset($url[0]) && $url[0] != '/') {

				$currentAction = $url[0];

				array_shift($url);

			} else {

				$currentAction = 'index';
			}

			if (count($url) > 0) {
				$params = $url;
			}

			

			


		} else {

			$currentController = 'HomeController';
			$currentAction = 'index';
		}

		// TESTE COM A URL

			
			/*echo "Controller: ".$currentController."<br/>".
			     "Action: ".$currentAction."<br/>";
			     print_r($params);



			exit();*/

		$currentController = ucfirst($currentController);

		$prefix = '\Controller\\';

		$currentController = $prefix.$currentController;

		if (class_exists($currentController)) {
			
			$controller = new $currentController;

		} else {

			$controller = new \Controller\NotFoundController();
		}


		$metodo = array(
			$controller,
			$currentAction
		);
		$metodo2 = array(
			$controller,
			"index"
		);


		if (!method_exists($controller,$currentAction)) {
			
			call_user_func_array($metodo2, $params);

		} else {

			call_user_func_array($metodo, $params);
		}

	}
	
}