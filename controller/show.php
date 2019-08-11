<?php
    if ( isset($_GET['id']) )
    {
        $id = $_GET['id'];
        $list = $db->getList($id);

    }
    else
    {
        header("Location: /"); exit;
    }

    require "views/shownote.php";

