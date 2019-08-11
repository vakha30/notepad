<?php

    $list = [
        "title" => $_POST['title'],
        "text" => $_POST['text']
    ];

    $db->add("list", $list);

    header("Location: /");
    exit;
