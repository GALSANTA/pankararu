<?php
namespace Core;

class Controller {

	public function __construct() {
		
	}
	
	public function loadTemplate($viewName, $viewData = array()){
	
		require 'View/template.php';

	}

	public function loadViewInTemplate($viewName,$viewData = array()){

		extract($viewData);

		require 'View/'.$viewName.'.php';

	}
	public function loadView($viewName, $viewData = array()){

		extract($viewData);

		require 'View/'.$viewName.'.php';
	}

}