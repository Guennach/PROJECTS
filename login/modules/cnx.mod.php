<?php
    $dsn = 'mysql:host=localhost;dbname=login_system';
    $user = 'root';
    $pass = '';
    try
    {
         $db = new PDO($dsn,$user,$pass);
    }
    catch(PDOException $ex)
    {
        $error = 'error: '.$ex->getMessage();
        print $error;
        //exit();
    }
?>