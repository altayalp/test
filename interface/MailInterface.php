<?php

interface MailInterface
{
	public function to($to);
	public function subject($subject);
	public function send();
}

?>
