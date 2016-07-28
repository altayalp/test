<?php

include('interface/AuthInterface.php');
include('interface/MailInterface.php');
include('interface/UserInterface.php');
include('interface/ValidateInterface.php');
include('Auth.php');
include('Mail.php');
include('User.php');
include('Validate.php');
include('SignUpFacade.php');

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
