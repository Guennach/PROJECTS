<?php

    include('modules/cnx.php');
    include('modules/assignments_db.php');
    include('modules/course_db.php');

    /*$assignment_id = filter_input(INPUT_POST, 'assignment_id', FILTER_VALIDATE_INT);*/
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
    $action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
    $courseName = filter_input(INPUT_POST, 'course', FILTER_SANITIZE_STRING);
    
    if(!$action)
        $action = 'list_assignment';
    if($action == 'list_assignment')
    {
        $assignments = get_all_assignments();
        include('views/assignmentsList.view.php');
    }
    if($action == 'delete_assignment')
    {
        $assignmentId = filter_input(INPUT_POST, 'assignment_id' , FILTER_SANITIZE_STRING);
        $check = delete_assignment($assignmentId);
        header('Location: .?action=list_assignment');
    }
    if($action == 'add_assignment')
    {
        $courses = get_courses();
        include('views/insertassignment.view.php');
        if($description && $courseName)
        {
            insert_assignment($description, $courseName);
            header('Location: .?action=list_assignment');
        }
    }
    if($action == 'submit')
    {
        insert_assignment($description, $courseName);
    }
?>