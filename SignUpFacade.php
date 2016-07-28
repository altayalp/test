<?php
namespace altayalp\test;
use altayalp\test\interfaces\AuthInterface;
use altayalp\test\interfaces\MailInterface;
use altayalp\test\interfaces\UserInterface;
use altayalp\test\interfaces\ValidateInterface;

/**
* Facade pattern class
*
* @author altayalp <altayalp@gmail.com>
*/
class SignUpFacade
{

	private $validate;
	private $user;
	private $auth;
	private $mail;

	public function __construct(ValidateInterface $validate, UserInterface $user, AuthInterface $auth, MailInterface $mail)
	{
		$this->validate = $validate;
		$this->user = $user;
		$this->auth = $auth;
		$this->mail = $mail;
	}

	public function signUpUser($userName, $userPass, $userMail)
	{
		if ($this->validate->isValid(['name' => $userName, 'password' =>$userPass, 'mail' => $userMail])) {
			$this->user->create(['name' => $userName, 'password' =>$userPass, 'mail' => $userMail]);
			$this->auth->login($userName, $userPass);
			$this->mail->to($userMail)->subject('Welcome')->send();
			echo 'ok';
		}
	}

}

?>
