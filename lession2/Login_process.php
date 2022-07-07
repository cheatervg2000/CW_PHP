<?php 
session_start();
$errors = [];
$account = [
	'email' => 'test@gmail.com',
	'password' => '123456'
];

if (!empty($_POST['remember_me'])) {
	$_SESSION['account'] = [
		'email' => $_POST['email'] ?? '',
		'password' => $_POST['password'] ?? '',
		'remember_me' => $_POST['remember_me']
	];
} else {
	$_SESSION['account'] = [];
}

if (empty($_POST['email'])) {
	$errors['email'] = 'Email address field is required';
}
if (empty($_POST['password'])) {
	$errors['password'] = 'Password field is required';
}


if (empty($errors)) {
	if ($account['email'] == $_POST['email'] && $account['password'] == $_POST['password']) {
		header('location: /formlogin/login-success.php');
		exit();
	} else {
		$errors['password'] = 'Email address or password is invalid';
	}
	
} 

$_SESSION['errors'] = $errors;
if (!empty($errors)) {
	header('location: /formlogin/index.php');
	exit();
}


//  $errors =[];
// if ($_POST['mail'])
// {
// 	if(false == filter_var($_POST['mail'],FILTER_VALDATE_EMAIL))
// 	{
// 		$errors['mail'] =$_POST['mail'];
// 		$errors['mail'] ='is not valid email address';
// 	}
// else{
// 		$errors['mail'] = "login id is required";
// 	}
// if (0 == strlen($_POST['password']))
// {
// 	$errors['password'] ="login id í required";

// }
// if ($errors)
// {
// 	$_SESSION['errors'] =$errors;
// 	$_SESSION['olds'] = $_POST;
// 	header('location: /login.php');
// 	exit();
// }
// }
?>