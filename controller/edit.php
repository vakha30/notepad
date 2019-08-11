<?php

if( !isset( $_GET['id'] ) ) {
        header("Location: /"); exit;
    }

    $id = $_GET['id'];

    $data = [
        'id' => $id,
        'title' => $_POST['title'],
        'text' => $_POST['text']
    ];

    $db->edit("list", $data);

    header("Location: /");