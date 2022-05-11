<?php include('header.view.php') ?>
<div class="container">
    <?php foreach($assignments as $assignment) : ?>
        <form action="." method="post">
            <input type="hidden" name="action" value="delete_assignment">
            <div class="content">
                <h3><?= $assignment['courseName'] ?> </h3>
                <p><?= $assignment['description'] ?></p>
            </div>
            <input type="hidden" name="assignment_id" value=<?= $assignment['id'] ?> >
            <input type="submit" value="delete" name="delete_assignment">
        </form>
    <?php endforeach ?>
    <form action="." method="post">
        <input type="hidden" name="action" value="add_assignment">
        <input type="submit" value="add assignment">
    </form>
</div>
<?php include('footer.view.php') ?>
