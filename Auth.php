<?php
namespace altayalp\test;

class Auth implements AuthInterface
{
	public function login($username, $password)
	{
		return true;
	}
}

?>
