<?php 
/**
 * Classe Usuario
 *
 *Esta classe é a classe de acesso a tabela usuario
 *
 *
 *@package Model
 *
 *@author Fernando Gabriel M. da Silva <fernando99gabriel@gmail.com>
 */
namespace Model;

use \Core\Model;

class Usuario extends Model
{

	public function isLoged():bool
	{
		$token = md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);
		
		if (isset($_SESSION['login']) && !empty($_SESSION['login']) && $token == $_SESSION['login']) {
			return TRUE;
		}
		return FALSE;
	}
	
	public function fazerlogin(string $email, string $senha):bool
	{

		$sql = "SELECT * FROM usuario WHERE email = :email AND senha = :senha";

		$sql = $this->pdo->prepare($sql);

		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", $senha);

		$sql->execute();

		if ($sql->rowCount() > 0) {

			$_SESSION['login'] =  md5($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']);

			return TRUE;
		}
		return FALSE;
	}

}
