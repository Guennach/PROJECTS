<?php

    function get_courses()
    {
        global $db;
        $query = 'SELECT * FROM courses ORDER BY courseId';
        $statement = $db->query($query);
        $statement->execute();
        $courses = $statement->fetchAll();
        $statement->closeCursor();
        return $courses;
    }

    function get_course_name($course_id)
    {
        global $db;
        $course;
        if($course_id)
        {
            $query = 'SELECT * FROM courses WHERE courseId = :ci';
            $statement = $db->prepare($query);
            $statement->bindValue(':ci',$course_id);
            if($statement->execute())
                $course = $statement->fetch();
            else
                return null;
        }
        return $course;
    }

    function delete_course($cName)
    {
        global $db;
        $check = false;
        if($cName)
        {
            $query = 'DELETE FROM courses WHERE courseName = :cn';
            $statement = $db->prepare($query);
            $statement->bindValue(':cn', $cName);
            if($statement->execute())
                $check = true;
            $statement->closeCursor();
        }
        return $check;
    }

    function add_course($cName)
    {
        global $db;
        $check = false;
        if($cName)
        {
            $query = 'INSERT INTO courses (courseName) VALUES (:cn)';
            $statement = $db->prepare($query);
            $statement->bindValue(':cn', $cName);
            if($statement->execute())
                $check = true;
            $statement->closeCursor();
        }
        return $check;
    }
?>