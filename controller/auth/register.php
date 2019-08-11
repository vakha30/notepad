<?php

$email = $_POST['email'];
$login = $_POST['login'];
$password = $_POST['password'];


try {
    $userId = $auth->register($email, $password, $login, function ($selector, $token) use ($email) {
        $url = 'http://notepad/verif?selector=' . \urlencode($selector) . '&token=' . \urlencode($token);
        mail($email, "ads", $url, "From: gg95gg95gg95gg95@gmail.com");
    });

}
catch (\Delight\Auth\InvalidEmailException $e) {
    die('Invalid email address');
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    die('Invalid password');
}
catch (\Delight\Auth\UserAlreadyExistsException $e) {
    die('User already exists');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}

header("Location: /");
exit;

