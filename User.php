<?php
namespace altayalp\test;

class User implements UserInterface
{
	public function create(array $data)
	{
		return true;
	}
}

?>
