<?php include('header.view.php') ?>

<div class="container">
    <form action="." method="POST">
        <input type="hidden" name="action" value="add_assignment">
        <div class="description">
            <label for="description">Assignment Description :</label>
            <input type="text" name="description" id="description">
        </div><br/>
        <div class="courseName">
            <label for="courseName">Course Name :</label>
            <select name="course" id="courses">
                    <option>Select value :</option>
                <?php foreach($courses as $course) {?>
                    <option value=<?= $course['courseId'] ?>> 
                     <?= $course['courseName'] ?>
                    </option>
                <?php } ?>
            </select>
        </div><br/>
        <input type="submit" value="submit" name="ss" >
    </form>
</div>
<?php include('footer.view.php') ?>