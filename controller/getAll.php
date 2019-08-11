<?php

    $lists = $db->getAllLists();
    $user = '';
    if( isset($_SESSION) ) {
        $user = $_SESSION['user'];
    } else {
        $user = 'Гость';
    }

include "views/index.php";
