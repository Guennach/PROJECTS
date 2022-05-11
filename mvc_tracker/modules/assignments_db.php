<?php

    function get_assignments_by_course($course_id)
    {
        global $db;
        if($course_id)
        {
            $query = 'SELECT A.* , C.courseName FROM 
            assignments A, courses C WHERE
            A.courseId = C.courseId AND
            A.course_id = :course_id ORDER BY A.ID';
        }
        else
        {
            $query = 'SELECT A.* , C.courseName FROM 
            assignments A, courses C WHERE
            A.courseId = C.courseId ORDER BY A.ID';
        }
        $statement = $db->prepare($query);
        $statement->bindValue(':course_id', $course_id);
        $statement->execute();
        $assignments = $statement->fetchAll();
        $statement->closeCursor();
        return $assignments;
    }

    function delete_assignment($assignment)
    {
        global $db;
        $query = 'DELETE FROM assignments WHERE id = :assignment_id';
        $statement = $db->prepare($query);
        $statement->bindValue(':assignment_id', $assignment);
        $statement->execute();
        /*$statement->closeCursor();*/
    }

    function insert_assignment($desc, $courseid)
    {
        global $db;
        $check = false;
        if($desc && $courseid)
        {
            $query = 'INSERT INTO assignments (description, course_id) VALUES(:desc, :courseid)';
            $statement = $db->prepare($query);
            $statement->bindValue(':desc', $desc);
            $statement->bindValue(':courseid', $courseid);
            if($statement->execute())
                $check = true;
            $statement->closeCursor();
        }
        return $check;
    }

    function get_all_assignments()
    {
        global $db;
        $query = 'SELECT A.*, C.* FROM assignments A , courses C WHERE A.course_id = C.courseId ORDER BY A.course_id';
        $statement = $db->prepare($query);
        $statement->execute();
        $assignments = $statement->fetchAll();
        $statement->closeCursor();
        return $assignments;
    }

?>