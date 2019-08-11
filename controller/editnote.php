<?php
    if( !isset($_GET['id']) ) {
        header("Location: /"); exit;
    }
    $id = $_GET['id'];

        $list = $db->getList($id);

        include "views/editnote.php";
        
?>