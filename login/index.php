<?php 

    require 'modules/cnx.mod.php';
    require 'modules/login.mod.php';

    $name = filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    if(!$action)
    {
        include 'views/login.view.php';
    }
    if($action == 'login_btn')
    {
        if(login($name, $pass))
            echo('Login found');
        else
            echo('Not found');
    }
    echo($action);

?>