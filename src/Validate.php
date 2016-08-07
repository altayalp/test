<?php
namespace altayalp\test;

use altayalp\test\Interfaces\ValidateInterface;

class Validate implements ValidateInterface
{
	public function isValid(array $data)
	{
		return true;
	}
}

?>
