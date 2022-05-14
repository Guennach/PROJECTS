<?php

    function login($name, $pass)
    {  
        global $db;
        $check = false;
        if($name && $pass)
        {
            $query = 'SELECT * FROM login WHERE name = :name AND password = :pass';
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $statement->bindValue(':pass', $pass);
            $statement->execute();
            $data = $statement->fetchAll();
            $statement->closeCursor();
        }
        return $data;
    }

?>