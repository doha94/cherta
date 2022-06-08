<?php
    $mode = $REQUEST['mode'];

    if($mode == 'main') {
        header("location: /v1.php")
    }
    else if($mode == 'search') {
        header("location: /v2.php")
    }
    else if($mode == 'login') {
        header("location: /v3.php")
    }
    else {
        header("location: /404.php")
    }