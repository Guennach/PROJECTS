<?php

    $dsn = 'mysql:host=localhost;dbname=assignments_tracker';
    $user = 'root';
    $pass = '';

    try
    {
        $db = new PDO($dsn, $user, $pass);
    }
    catch(PDOException $ex)
    {
        $error = "Database error : ";
        $error .= $e->getMessage();
        include('view/error.php');
        exit();
    }

?>