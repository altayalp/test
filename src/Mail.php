<?php
namespace altayalp\test;

use altayalp\test\Interfaces\MailInterface;

class Mail implements MailInterface
{
	public function to($to)
	{
		return $this;
	}

	public function subject($subject)
	{
		return $this;
	}

	public function send()
	{
		return true;
	}
}

?>
