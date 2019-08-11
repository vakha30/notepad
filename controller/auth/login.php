<?php

session_start();

$email = $_POST['email'];
$password = $_POST['password'];

try {
    $auth->login($email, $password);
}
catch (\Delight\Auth\InvalidEmailException $e) {
    die('Wrong email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Wrong password');
}
catch (\Delight\Auth\EmailNotVerifiedException $e) {
    die('Email not verified');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}

header("Location: /");
exit;

?>

