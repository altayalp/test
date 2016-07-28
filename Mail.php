<?php
namespace altayalp\test;

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
