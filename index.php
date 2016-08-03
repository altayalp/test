<?php
include('vendor/autoload.php');

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

echo 'test';
?>
