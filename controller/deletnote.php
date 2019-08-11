<?php
    if( !isset($_GET['id']) ) {
        header("Location: /"); exit;
    }

    $id = $_GET;

    $db->deleteList($id);

    header("Location: /"); exit;
?>