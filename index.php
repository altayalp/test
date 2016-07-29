<?php
namespace altayalp\test;

include('interface/AuthInterface.php');
include('interface/MailInterface.php');
include('interface/UserInterface.php');
include('interface/ValidateInterface.php');
include('Auth.php');
include('Mail.php');
include('User.php');
include('Validate.php');
include('SignUpFacade.php');

use altayalp\test\Auth;
use altayalp\test\Mail;
use altayalp\test\User;
use altayalp\test\Validate;
use altayalp\test\SignUpFacade;

// Php facade design pattern simple and complete example with dependency injection
$userName = 'userName';
$userPass = 'userPass';
$userMail = 'userMail';

// Create instance of classes
$validate = new Validate();
$user = new User();
$auth = new Auth();
$mail = new Mail();



$facade = new SignUpFacade($validate, $user, $auth, $mail);
$facade->signUpUser($userName, $userPass, $userMail);

?>
