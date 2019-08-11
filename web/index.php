<?php

use Components\database\Query_db;
use Delight\Auth\Auth;

$connect = new PDO('mysql:dbname=notepad_db;host=localhost;charset=utf8mb4', 'root', '');
$auth = new Auth($connect);
$db = new Query_db($connect);

$username = $auth->getUsername();
$is_logged = $auth->isLoggedIn();

$url = $_SERVER['REQUEST_URI'];

if ($url == "/") {
    require "controller/getAll.php";
    exit;
} elseif ($url == "/shownote?id=" . $_GET['id']) {
    require "controller/show.php";
    exit;
} elseif ($url == "/addnote") {
//        require "../controller/store.php"; exit;
    require "views/addnote.php";
    exit;
} elseif ($url == "/addnote/store") {
    require "controller/store.php";
    exit;
//        require "../views/addnote.php"; exit;
} elseif ($url == "/editnote?id=" . $_GET['id']) {
    require "controller/editnote.php";
    exit;
} elseif ($url == "/edit?id=" . $_GET['id']) {
    require "controller/edit.php";
    exit;
} elseif ($url == "/deletenote?id=" . $_GET['id']) {
    require "controller/deletnote.php";
    exit;
} //    Auth
elseif ($url == "/register") {
    require "views/auth/register.php";
    exit;
} elseif ($url == "/controller/register") {
    require "controller/auth/register.php";
    exit;
} elseif ($url == "/login") {
    require "views/auth/login.php";
    exit;
} elseif ($url == "/controller/login") {
    require "controller/auth/login.php";
    exit;
} elseif ($url == "/logout") {
    require "controller/auth/logout.php";
    exit;
} elseif ($url == "/userinfo") {
    require "views/userinfo.php";
    exit;
} elseif ($url == "/ver") {
    require "views/ver.php";
    exit;
} elseif ($url == "/verif?selector=" . $_GET['selector'] . "&token=" . $_GET['token']) {
    require "controller/auth/verif.php";
    exit;
}
