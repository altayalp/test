<?php
namespace altayalp\test;

use altayalp\test\Interfaces\AuthInterface;

class Auth implements AuthInterface
{
	public function login($username, $password)
	{
		return true;
	}
}

?>
