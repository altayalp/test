<?php
namespace altayalp\test;

use altayalp\test\Interfaces\UserInterface;

class User implements UserInterface
{
	public function create(array $data)
	{
		return true;
	}
}

?>
