<?php

    if (!class_exists('Core')) {
        require_once 'core/Core.php';
    }
    $Core = new Core();

    $req = !empty($_REQUEST['q'])
        ? trim($_REQUEST['q'])
        : '';
    $Core->handleRequest($req);