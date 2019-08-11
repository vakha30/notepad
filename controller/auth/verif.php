<?php

try {
    $auth->confirmEmail($_GET['selector'], $_GET['token']);

    echo 'Вы подтвердили свой email. Перейдите на главную страницу';
    echo "<br><a href='/'>Главная страница</a>";
}
catch (\Delight\Auth\InvalidSelectorTokenPairException $e) {
    die('Invalid token');
}
catch (\Delight\Auth\TokenExpiredException $e) {
    die('Token expired');
}
catch (\Delight\Auth\UserAlreadyExistsException $e) {
    die('Email address already exists');
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    die('Too many requests');
}
